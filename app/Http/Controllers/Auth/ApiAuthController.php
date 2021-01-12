<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CompanyController;
use App\Http\Requests\RegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;


class ApiAuthController extends ApiController
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {

        $credentials = request(['email', 'password']);
        if (! auth()->attempt($credentials)) {
            return $this->responseUnauthorized();
        }
        // Get the user data.
        $user = auth()->user();
        return $this->successResponse($user);
    }


    /**
     * Get a JWT via given credentials.
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        try{
        DB::beginTransaction();
        $objUser = new User();
        $objUser->name = $request->name;
        $objUser->email = $request->email;
        $objUser->password = bcrypt($request->password);
        $objUser->phone_number = $request->phone_number;
        $arrExtraData['terms'] = $request->terms;
        $objUser->extra_data = json_encode($arrExtraData);
        if ($request->get('image')) {
            $image = $request->get('image');
            $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($request->get('image'))->save(public_path('/').$name);
            $objUser->image = $name;

        }

        $objUser->save();

        $objCompany = new Company();
        $objCompany->company_name       = $request->name;
        $objCompany->company_address    = $request->name;
        $objCompany->company_phone      = $request->name;
        $objCompany->company_person     = $request->name;
        $objCompany->company_country    = $request->name;
        $objCompany->save();
        DB::commit();
        }catch (\Exception $e){
            return $this->responseUnprocessable($e->getMessage());
        }
       return $this->responseSuccess();
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function callback($provider)
    {

        try {
            $userSocial = \Laravel\Socialite\Facades\Socialite::driver($provider)->stateless()->user();
        } catch (\Exception $e) {
            return $this->responseUnprocessable($e->getMessage());
        }
        $user       =   User::where(['email' => $userSocial->getEmail()])->first();
        if($user){
            Auth::login($user);
            return $this->successResponse($user);

        }else{
            $objUser =new User();
            $objUser->name = $userSocial->getName();
            $objUser->email = $userSocial->getEmail();
            $objUser->provider_id = $userSocial->getId();
            $objUser->provider = $provider;
            $objUser->save();
            return $this->successResponse($objUser);
        }
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function successResponse($user){
        $token = $user->createToken('myApp')-> accessToken;
        return response()->json([
            'status' => 200,
            'message' => 'Authorized.',
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => array(
                'id' => $user->id,
                'name' => $user->name
            )
        ], 200);
    }


}
