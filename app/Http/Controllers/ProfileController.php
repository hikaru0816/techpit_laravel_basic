<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function confirm(ProfileRequest $request) {
        $request->session()->put('username', $request->username);
        $request->session()->put('password', $request->password);
        $request->session()->put('latitube', $request->latitube);
        $request->session()->put('longitude', $request->longitude);
        return view('profile.confirm');
    }
}
