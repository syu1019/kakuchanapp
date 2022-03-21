<?php

namespace App\Http\Controllers;

use App\Models\Kakuta4;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
}
