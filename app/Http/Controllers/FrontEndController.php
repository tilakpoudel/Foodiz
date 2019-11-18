<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function getAllFoods(){
        $foods= Food::where('status',1)->get();
        dd($foods);
    }
}
