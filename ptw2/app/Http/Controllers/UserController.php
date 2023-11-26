<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
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
        $rules = [

            'email' => 'required|min:10|max:50|regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[@!#&])[A-Za-z0-9@!#&]{8,50}$/',
        ];
        $message = [

            'required' => ':attribute bắt buộc phải nhập.',
            'min:10' => ':attribute không được nhập dưới 10 ký tự.',
            'max:50' => ':attribute không được nhập trên 50 ký tự.',

            'email' => [
                'regex' => ':attribute sai định đạng email'
            ],
            'password' => [
                'regex' => [
                    'message' => ':attribute phải có ít nhất một ký đặc biệt(!,#,@) và 1 chữ in Hoa(A-Z), tối thiểu 8 ký tự và tối đa 50 ký tự '
                ]
            ]
        ];
        $attribute = [
            'email' => 'Email',
            'password' => 'Mật khẩu',

        ];

        $validator = Validator::make($request->all(), $rules, $message, $attribute);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $credetail = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (filled($credetail)) {
            // Kiểm tra xem người dùng có hợp lệ hay không
            if (Auth::attempt($credetail)) {
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|min:10|max:50|regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[@!#&])[A-Za-z0-9@!#&]{8,50}$/',
            'password_confirmation' => 'required|same:password',
        ];
        $message = [

            'required' => ':attribute bắt buộc phải nhập.',
            'min:10' => ':attribute không được nhập dưới 5 ký tự.',
            'max:50' => ':attribute không được nhập trên 50 ký tự.',
            'same' => 'Mật khẩu không khớp',
            'email' => [
                'regex' => ':attribute sai định đạng email'
            ],
            'password' => [
                'regex' => [
                    'message' => ':attribute phải có ít nhất một ký đặc biệt(!,#,@) và 1 chữ in Hoa(A-Z), tối thiểu 8 ký tự và tối đa 50 ký tự '
                ]
            ]
        ];
        $attribute = [
            'email' => 'Email',
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
        // Kiểm tra xem email đã có trong dữ liệu hay chưa
        if (User::where('email', $request->email)->exists()) {
            // Email đã có trong dữ liệu
            return back()->with('error', 'Email đã tồn tại');
        } else {
            // Email chưa có trong dữ liệu
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
}
