<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsersModel;
use DB, Auth , Hash;
class LoginController extends Controller
{
    public function getlogin(Request $request){
        if($request->session()->has('user')){
            return redirect()->route('admin');
        }else{
            return view('admin.login');
        }
    }
    public function postlogin(Request $request){
        $email = $request['username'];
        $pass = $request['pass'];

        $user = UsersModel::where('email' , $email)->first();
        if (Hash::check($pass, $user->password) ) {
            $request->session()->put('user', $user);
            return redirect()->route('admin');
        }else{
            return redirect()->route('get-login-admin');
        }
    }
    public function getlogout(Request $request){
        $request->session()->forget('user');
        $request->session()->flush();
        return redirect()->route('get-login-admin');
    }
}
