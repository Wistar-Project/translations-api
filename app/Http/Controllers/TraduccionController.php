<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TraduccionController extends Controller
{
    public function Traducir(Request $request){
        $validacion = Validator::make($request -> all(), [
            'id' => 'required|exists:traducciones',
            'idioma' => 'required|in:es,en'
        ]);

        if($validacion -> fails())
            return $validacion -> errors();
    }
}
