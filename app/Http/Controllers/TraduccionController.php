<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Traduccion;

class TraduccionController extends Controller
{
    public function Traducir(Request $request){
        $validacion = Validator::make($request -> all(), [
            'id' => 'required|exists:traducciones',
            'idioma' => 'required|in:es,en'
        ]);

        if($validacion -> fails())
            return $validacion -> errors();

        $traduccion = Traduccion::where([
            ['id', $request -> get('id')],
            ['idioma', $request -> get('idioma')]
        ]) -> first();

        return $traduccion -> texto;
    }
}
