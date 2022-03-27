<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function display(){
        $row = DB::table('article')->get();
        return view('admin');
    }
}
