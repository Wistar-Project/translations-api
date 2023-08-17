<?php

namespace App\Http\Controllers;
use App\Models\Traduccion;

class TraduccionController extends Controller
{
    public function ObtenerTraducciones(){
        return Traduccion::all();
    }
}
