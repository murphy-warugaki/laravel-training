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
}
