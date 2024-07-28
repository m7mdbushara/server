<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Parent\StoreRequest;
use App\Models\ParentChild;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view("site.register");
    }


    public function store(StoreRequest $request)
    {
        ParentChild::create([
            'parent_name' => $request->parent_name,
            'username' => $request->username,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'password' => bcrypt($request->password),
            'id_expiration_date' => $request->id_expiration_date,
            'id_number' => $request->id_number,
        ]);

        $credentials = $request->only('username', 'password');
        auth()->guard('parent')->attempt($credentials);
         
        alert()->success(__('تم تسجيل البيانات بنجاح'));
        return to_route('additional-information.create');
    }

    public function loginForm()
    {
        return view('site.login');
    }
 
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (auth()->guard('parent')->attempt($credentials)) {
            if (auth()->guard('parent')->user()->contactInformation()->exists()) {
                return to_route('parents.profile');
            } else {
                return to_route('additional-information.create');
            }
        } else {
            return redirect()->back()->withInput($request->only('username'))->withErrors([
                'username' => __('لا يوجد حساب مسجل بأسم المستخدم هذا')
            ]);
        }
    }


    public function logout()
    {
        auth()->guard('parent')->logout();

        return redirect()->route('parents.loginForm');
    }
}
