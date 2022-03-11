<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;

class ProfileController extends Controller
{
    public function profile(){
        $oreder = Order::get();
        return view('profile', ['qwe' => $oreder]);
    }

    public function addOrder(Request $r){
        $validator = Validator::make($r->all(), [
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);

 
        if ($validator->fails()) {
            return response()->json(['err' => $validator->errors()], 400);
        } else{
            $all = $r->all()['img'];
            $path = Storage::put('/photo', $all);
            $file = $r->file('img')->store('photo', 'public');
            $a = Auth::user()->id;
            Order::create([
                'name' => $r->name,
                'o_desc' => $r->desc,
                'cat' => $r->cat,
                'img1' => $path,
                'user_id' => $a
            ]);
            return redirect()->route('profile');
        }
    }

    // public function update(Request $r)
    // {
    //     $all = $r->all()['img'];
    //     $path = Storage::put('/photo', $all);
    //     $file = $r->file('img')->store('photo', 'public');
    // }
}
