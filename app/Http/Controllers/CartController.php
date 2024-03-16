<?php

namespace App\Http\Controllers;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class CartController extends Controller
{
    public function cart()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.cart')->with(compact('danhmuc','truyen'));
    }
    
}
