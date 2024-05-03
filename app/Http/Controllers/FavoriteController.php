<?php

namespace App\Http\Controllers;


use App\Models\Favorities;

/**
 * CRUD User controller
 */
class FavoriteController extends Controller
{
    /**
     * List of users
     */
    public function list()
    {

        $sothich = Favorities::all();
        return view('sothich.danhsach', ['sothich' => $sothich]);
    }

}
