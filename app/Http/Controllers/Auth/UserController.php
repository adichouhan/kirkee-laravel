<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends ApiController
{
    public function index(){
       return User::all();
    }

    public function getUser($userid){
        return User::findOrFail($userid);
    }

    public function delete($userid){
        $objUser = User::findOrFail($userid);
        $objUser->delete;
        return $this->responseSuccess();
    }


    /**
     * Get a JWT via given credentials.
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        try{
            DB::beginTransaction();
            $objUser = User::findOrNew($id);

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

            $objCompany = Company::findOrNew($id);
            $objCompany->company_name       = $request->company_name;
            $objCompany->company_address    = $request->company_address;
            $objCompany->company_phone      = $request->company_phone;
            $objCompany->company_person     = $request->company_person;
            $objCompany->company_country    = $request->company_country;
            $objCompany->save();
            DB::commit();
        }catch (\Exception $e){
            return $this->responseUnprocessable($e->getMessage());
        }
        return $this->responseSuccess();
    }

}
