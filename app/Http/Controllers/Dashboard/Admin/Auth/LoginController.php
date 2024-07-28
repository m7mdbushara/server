<?php

namespace App\Http\Controllers\Dashboard\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // if (auth()->guard('admin')->check()) {
        //     return back();
        // } else {
        return view('dashboard.admin.auth.login');
        // }
    }

    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'الرجاء ادخال البريد الالكتروني',
                'email.email' => 'الرجاء إدخال بريد إلكتروني صحيح',
                'password.required' => 'الرجاء إدخال كلمة المرور',
            ]
        );


        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.parents.finance-requests');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'لا يوجد حساب مسجل بهذا البريد الإلكتروني'
        ]);
    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect()->route('showLoginForm');
    }
}
