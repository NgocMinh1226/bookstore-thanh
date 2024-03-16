<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;

use DB;
use Session;
session_start();

class CustomerController extends Controller
{
    public function login_customer()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.login')->with(compact('danhmuc','truyen'));
    }
    public function register_customer()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.register')->with(compact('danhmuc','truyen'));
    }

    
    public function login_customer_login(Request $request)
    {
        $email = $request->email_account;
        $password = md5($request->password_account);

        if ($email == null) {
            return redirect('/dangnhap')
                ->with('status', 'Vui lòng nhập email để đăng nhập!');
        }

        if ($password == null) {
            return redirect('/dangnhap')
                ->with('status', 'Vui lòng nhập mật khẩu để đăng nhập!');
        }

        $result = DB::table('customers')->where('customer_email', $email)->where('customer_password', $password)->first();
        
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);

            return Redirect::to('/') ->with('status', 'Đăng nhập thành công!');
        } else {
            return Redirect::to('/dangnhap')
                ->with('status', 'Tài khoản hoặc mật khẩu không đúng!');;
        }
    }

    public function logout_customer()
    {
        Session::flush(); //customer-id, cusotmer_name
        return Redirect('/');
    }


    public function add_customer(Request $request)
    {
        $customer_email = $request->customer_email;
        $customer_name =  $request->customer_name;
        $password = $request->customer_password;
        $input_repassword = $request->repass;
        $customer_phone = $request->customer_phone;

        if ($customer_email == null || $customer_name == null) {
            return redirect('/dangky')
                ->with('status', 'Vui lòng nhập đầy đủ tên đăng nhập và email!');
        }

        if ($customer_name == null) {
            return redirect('/dangky')
                ->with('status', 'Vui lòng nhập tên đăng nhập!');
        }

        if ($password == null) {
            return redirect('/dangky')
                ->with('status', 'Vui lòng nhập mật khẩu!');
        }

        // Kiểm tra xem email đã tồn tại trong bảng tbl_customers chưa
        $existingCustomer = DB::table('customers')
            ->where('customer_email', $customer_email)
            ->first();

        if ($input_repassword != $password) {
            return redirect('/dangky')
                ->with('status', 'Vui lòng kiểm tra lại mật khẩu đăng ký!');
        }

        if ($existingCustomer) {
            return redirect('/dangky')
                ->with('status', 'Tài khoản đã đăng ký. Vui lòng kiểm tra lại!');
        } else {
            // Nếu email không trùng, thực hiện thêm khách hàng mới vào bảng
            $data = array();

            $data['customer_phone'] = $customer_phone;
            $data['customer_name'] = $customer_name;
            // $data['customer_phone'] = $request->customer_phone;
            $data['customer_email'] = $customer_email;
            $data['customer_password'] = md5($request->customer_password);

            $customer_id = DB::table('customers')->insertGetId($data);

            if ($customer_id) {
                Session::put('customer_id', $customer_id);
                Session::put('customer_name', $request->customer_name);
                return redirect('/dangnhap')->with('status', 'Đăng ký tài khoản thành công! Vui lòng đăng nhập!');
            }
        }
    }
}
