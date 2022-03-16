<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\cat;

class ProfileController extends Controller
{
    public function profile(){
        $cat = cat::get();
        $order = Order::select('orders.name as name', 'cats.name as cat', 'cats.id as catId', 'orders.status as status', 'orders.img1 as img', 'orders.img2 as img2', 'orders.o_desc as desc')
        ->join('cats','cats.id','orders.cat')
        ->where('user_id', '=', Auth::user()->id)
        ->get();

        return view('profile', ['qwe' => $order, 'cat' => $cat]);
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

    public function logOut(){
                Auth::logout();
                return redirect()->route('main');
    }

        public function sort(Request $r){
            switch ($r->status) {
                case 'Все':
                    $order = Order::select('orders.name as name', 'cats.name as cat', 'cats.id as catId', 'orders.status as status', 'orders.img1 as img', 'orders.img2 as img2', 'orders.o_desc as desc')
                    ->join('cats','cats.id','orders.cat')
                    ->where('user_id', '=', Auth::user()->id)
                    ->get();
                    break;
                
                default:
                $order = Order::select('orders.name as name', 'cats.name as cat', 'cats.id as catId', 'orders.status as status', 'orders.img1 as img', 'orders.img2 as img2', 'orders.o_desc as desc')
                ->join('cats','cats.id','orders.cat')
                ->where('user_id', '=', Auth::user()->id)
                ->where('orders.status' , $r->status)
                ->get();
                    break;
            }
            return view('incl.SortOrders', ['qwe' => $order]);
    }

    // public function update(Request $r)
    // {
    //     $all = $r->all()['img'];
    //     $path = Storage::put('/photo', $all);
    //     $file = $r->file('img')->store('photo', 'public');
    // }
}
