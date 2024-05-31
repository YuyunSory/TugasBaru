<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        $data = array ('title' => 'Login');
        return view('login', $data);
    }

}
