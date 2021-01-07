<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Models\User;

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
}
