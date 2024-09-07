<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['isFullPage' => true]);
    }

    public function login(Request $request)
    {
        // 유효성 검사
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // 사용자 인증 시도
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 로그인 성공 시 홈으로 리다이렉트
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => '입력한 정보가 맞지 않습니다',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
