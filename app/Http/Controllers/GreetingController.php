<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GreetingRequest;

class GreetingController extends Controller
{
    public function greeting() {
        return view('greeting.index');
    }

    public function welcome(GreetingRequest $request) {
        $username = $request->username;
        // セッション追加
        $request->session()->put('username', $username);
        return view('greeting.welcome', [
            'username' => $username,
        ]);
    }

    public function hello(Request $request) {
        $username = $request->session()->get('username');
        return view('greeting.hello', [
            'username' => $username
        ]);
    }
}
