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
        return view('profile');
    }

    public function addOrder(Request $r){
        $validator = Validator::make($r->all(), [
            // 'name' => 'required',
            // 'desc' => 'required',
            // 'img' => 'required',
        ]);
 
        if ($validator->fails()) {
            return response()->json(['err' => $validator->errors()], 400);
        } else{
            $file = $r->file('img');
            $upload_file = 'public/folder';
            $filename = $file->getClientOriginalName();

            Storage::putFileAs($upload_file, $file, $fileName);
            // Order::create([
            //     'name' => $r->name,
            //     'desc' => $r->desc,
            // ]);
            return response()->json('yes11', 200);
        }
    }
}
