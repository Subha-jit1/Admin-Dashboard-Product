<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',   
            ]);
            if(Auth::attempt($credentials)){ 
                $request->session()->regenerate();
                return redirect()->intended(route('admin.dashboard'));
            } 
            return back()->withErrors(['email' => 'Invalid credentials']);
        } 
        return Inertia::render('Auth/SignIn');
    }


    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('admin.signin');
    }
}
