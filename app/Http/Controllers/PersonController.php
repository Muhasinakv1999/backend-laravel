<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
 

class PersonController extends Controller
{
    public function index()
    {
        // Fetch only id, name, and age from the persons table
        $persons = Person::select('id', 'name', 'age')->get();
        return response()->json($persons);
    }
}
