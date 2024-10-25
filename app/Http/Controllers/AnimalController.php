<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;


class AnimalController extends Controller
{
    public function index()
    {
        $pets = Animal::orderBy("name","asc")
            ->with("owner")
            ->get();

        return view("pets.index" , compact("pets"));
    }

    public function search(Request $request)
    {

        $pets = Animal::orderBy("name","asc")
        ->where("name","LIKE","%". $request->search ."%")
        // ->with("owner_id", "age", "breed")
        ->get();

        return view("pets.search", compact("pets"));
    }

}
