<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {

        $owners = Owner::orderBy("id","asc")
        ->get();


        return view("pets.index", compact("owners"));

    }
}
