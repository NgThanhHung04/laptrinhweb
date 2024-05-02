<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function listPost(){
        $baiviet = Posts::all();
        return view('baiviet.danhsach', ['baiviet' => $baiviet]);
    }

    
}
