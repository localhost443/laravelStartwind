<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('posts.login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(! \Auth::attempt($request->only('email', 'password'))){
            return back()->with('status', "There was a problem, Please try again or Register now");
        }

        return redirect()->route('dashboard');
    }

    public function destroy() {
        auth()->logout();
        return redirect()->route('login');

    }
}
