<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importo la classe creata 
use App\Models\MyModel;


class FirstController extends Controller
{

    function index()
    {
        $navLinks = config("---DatabaseTemporaneoDB");
        $a = 10;
    /*     $modello = MyModel::where("last_name", "Rossi")
        ->orWhere("email", "LIKE", "%@gmail.com")
        ->get(); */
        return view('index', compact("a","navLinks"/*, "modello" */));
    }

}