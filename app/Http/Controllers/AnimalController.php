<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;


class AnimalController extends Controller
{
    public function index()
    {
        $pets = Animal::orderBy("name", "asc")
            ->with(["owner", "image"])
            ->limit(10)
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

    public function create()
    {
        $pet = new Animal();
        return view('pets.create', compact('pet'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ], [
            'name.required' => 'Please insert the name!'
        ]);

        $pet = new Animal();
        $pet->name = $request->input('name');
        $pet->age = $request->input('age');
        $pet->breed = $request->input('breed');
        $pet->owner_id = $request->input('owner');
        $pet->species = $request->input('species');
        $pet->weight = $request->input('weight');
        $pet->image_id = $request->input('image');

        $pet->save();

        return redirect()->route('pets.edit', ['id' => $pet->id]);
    }

    public function edit(Request $request, ?int $pet_id = null)
    {
       $pet = Animal::findOrFail($pet_id ?? $request->pet_id);

       return view('pets.edit', compact('pet'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ], [
            '' => ''
        ]);

       
        $pet = Animal::findOrFail($request->pet_id)
;       $pet->name = $request->input('name');
        $pet->age = $request->input('age');
        $pet->breed = $request->input('breed');
        $pet->owner_id = $request->input('owner');
        $pet->species = $request->input('species');
        $pet->weight = $request->input('weight');
        $pet->save();

        session()->flash('success_message', 'Success!');

        return redirect()->route('pets.edit', ['id' => $pet->id])->with('success', '');
    }

}
