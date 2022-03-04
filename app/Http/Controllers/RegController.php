<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegController extends Controller
{
   public function reg(Request $r)
   {
       $validator = Validator::make($r->all(),[
           'fio' => 'required|string',
           'login' => 'required|string',
           'email' => 'required|string',
           'pass1' => 'required|string',
           'pass2' => 'required|string'

       ]);

       if($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 400);
       }else {
           User::create([
               'fio' => $r->fio,
               'login' => $r->login,
               'email' => $r->email,
               'pass1' => Hash::make($r->pass1),
               'is_admin' => '0',
           ]);
           return response()->json('yes', 200);
       }
   }
}
