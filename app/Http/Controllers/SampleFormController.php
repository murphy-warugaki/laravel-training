<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class SampleFormController extends Controller
{
    public function index(){
        $pets = Pet::orderBy('id', 'asc')->get();

        return view('sample_form', [
            "pets" => $pets
        ]);
    }

    public function show($id){
        $pet = Pet::find($id);
        return view("sample_show",[
            "pet" => $pet
        ]);
    }

    public function store(Request $request){
        $pet = new Pet();

        $pet->name = $request->pet;
        $pet->birthday = "1980/01/01";
        $pet->gender = "not set";

        $pet->save();

        return redirect("/form/index");
    }

    public function delete(Request $request){
        foreach($request->delete_pets as $pet_id) {
            Pet::find($pet_id)->delete();
        }

        return redirect('/form/index');
    }

    public function update(Request $request){
        Pet::find($request->pet_id)
        ->update([
            "name" => $request->name,
            "birthday" => $request->birthday,
            "gender" => $request->gender
        ]);
        return redirect("/form/index");
    }
}
