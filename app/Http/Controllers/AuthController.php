<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $r){
 
            $validator = Validator::make($r->all(),[
                'login' => 'required|string',
                'password' => 'required|string',
          ]);
     
            if($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            if (Auth::attempt(['login' => $r->login, 'password' => $r->password])) {
                return response()->json('ads', 200);
            } else{
                return response()->json(['errors' => ['form' => 'Ошибка в логине или пароле!']], 401);
        }
    }
    // public function logout(){
    //     Auth::logout();
    //    return redirect()->route(['main']);
    // }
}
