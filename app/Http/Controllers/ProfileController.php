<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index() {
        $data = array ('title' => 'Profile');
        return view('layouts.public.profile', $data);
    }
}
