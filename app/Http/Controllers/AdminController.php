<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\cat;

class AdminController extends Controller
{
    public function admin()
    {
        $cat = cat::get();
        $order = Order::select('orders.id as id','orders.name as name', 'cats.name as cat', 'orders.status as status', 'orders.img1 as img','orders.img2 as img2', 'orders.o_desc as desc')
        ->join('cats','cats.id','orders.cat')
        ->get();
        return view('admin', ['qwe' => $order, 'cat' => $cat]);
    }

    public function addComment(Request $request)
    {
        $order = Order::select('orders.id as id')->get();
        // $validator = Validator::make($request->all(), [
        //     'comment' => 'required'
        // ]);
 
            // Занос в БД (Обязательно сравнить id)
            Order::where('id','=', $request->id)->update([
                'comment' => $request->comment,
                'status' => 'Принято в работу',
            ]);
            return response()->json(['success' => $request->id], 200);
    }

    public function addImg(Request $request)
    {
        $all = $request->addImg;
        $path = Storage::put('/photo', $all);
        $file = $request->file('addImg')->store('photo', 'public');
            // Занос в БД img
            Order::where('id','=', $request->id)->update([
                'img2' => $path,
                // 'img2' => $request->addImg,
                'status' => 'Выполнено',
            ]);
            return response()->json(['success'], 200);
    }

    public function DelCat($id)
    {
        Cat::where('id', $id)->delete();
        return redirect()->route('main');
    }

    public function addCat(Request $r)
    {
        Cat::create([
            'name' => $r->name
        ]);
        return response()->json(['success cat'], 200);
    }
}
