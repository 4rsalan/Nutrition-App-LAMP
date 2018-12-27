<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\SessionRequest;


class AccountController extends Controller
{
    public function login(UserRequest $request){
        $request->session()->put('SignedIn', 'The user is logged in');
        return redirect("/");
    }

    public function logout(SessionRequest $request){
        $request->session()->forget('SignedIn');
        return redirect("/");
    }
}
