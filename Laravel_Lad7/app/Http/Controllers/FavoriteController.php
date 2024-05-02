<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorities;

class FavoriteController extends Controller
{
    /**
     * List of users
     */
    public function listFavorite(){
        $sothich = Favorities::all();
        return view('sothich.danhsach', ['sothich' => $sothich]);
    }

    
}
