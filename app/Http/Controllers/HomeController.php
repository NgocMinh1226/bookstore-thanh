<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.home')->with(compact('danhmuc','truyen'));
    }

    public function danhmuc($slug){
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $danhmuc_id = DanhmucTruyen::where('slug_danhmuc',$slug)->first();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$danhmuc_id->id)->get();
        return view('pages.danhmuc')->with(compact('danhmuc','truyen'));
    }

    public function category_book()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.category_book')->with(compact('danhmuc','truyen'));
    }

    public function user_profile()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.user_profile')->with(compact('danhmuc','truyen'));
    }

    public function timkiem(){
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $tukhoa = $_GET['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen',)->where('tentruyen','LIKE','%'.$tukhoa.'%')->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->get();
        return view('timkiem')->with(compact('danhmuc','truyen','tukhoa'));
    }
    
    public function we()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.we')->with(compact('danhmuc','truyen'));
    }

    public function user()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.user')->with(compact('danhmuc','truyen',));
    }
}
