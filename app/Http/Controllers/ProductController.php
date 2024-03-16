<?php

namespace App\Http\Controllers;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class ProductController extends Controller
{
    public function details_book($slug)
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::with('danhmuctruyen')->where('slug_truyen',$slug)->where('kichhoat',0)->first();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('slug_truyen',$slug)->get();
        return view('pages.details_book')->with(compact('danhmuc','truyen'));
    }
    
}
