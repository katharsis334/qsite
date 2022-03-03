<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
 
{
    public function reg(Request $r)
    {
        return response()->json($r->all(), 200);
    }
}
