<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(User $user)
    {
        return view("login");
    }
    public function logout(Request $request)
    {
        if (Auth::logout()) {

            return redirect('/login');
        }
        return redirect('/home');
    }

    //xử lý đăng nhập
    public function loginpost(Request $request)
    {
        // Kiểm tra xem người dùng có lưu đăng nhập hay không
        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
            // Tự động đăng nhập người dùng
            $credetail = [
                'email' => $_COOKIE['email'],
                'password' => $_COOKIE['password'],
            ];

            if (Auth::attempt($credetail)) {
                return redirect('/index')->with('success', 'Login successfully');
            } else {
                return back()->with('error', 'Email or Password incorrect');
            }
        }

        $credetail = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (filled($credetail)) {
            // Kiểm tra xem người dùng có hợp lệ hay không
            if (Auth::attempt($credetail)) {
                session_start();
                $user = Auth::user();
                $_SESSION['user_id'] =  csrf_token() . $user->id;
                return redirect('/home')->with('success', 'Login successfully');
            } else {
                return back()->with('error', 'Email or Password incorrect');
            }
        } else {
            // Báo lỗi nếu dữ liệu chưa được nhập đầy đủ
            return back()->with('error', 'Please fill in all required fields');
        }
    }



    public function register(Request $request)
    {
        return view("register");
    }
    //xử lý đăng ký
    public function registerpost(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[@!#&])[A-Za-z0-9@!#&]{8,50}$/',
            'password_confirmation' => 'required|same:password',
        ];
        $message = [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute không được nhập dưới 5 ký tự ',
            'regex' => ':attribute phải có ít nhất một ký đặc biệt(!,#,@) và 1 chữ in Hoa(A-Z), tối thiểu 8 ký tự và tối đa 50 ký tự ',
            'same' => 'Mật khẩu không khớp',
        ];
        $attribute = [
            'name' => 'Tên người dùng',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Mật khẩu',
        ];
        $validator = Validator::make($request->all(), $rules, $message, $attribute);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return redirect()->route('login');
        } else {
            return back()->withErrors($user->getErrors());
        }
    }
}
