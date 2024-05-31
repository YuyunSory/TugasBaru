<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index() {
        $data = array ('title' => 'Contact');
        return view('layouts.public.contact', $data);
    }
}
