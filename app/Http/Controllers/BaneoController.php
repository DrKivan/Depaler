<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baneo;

class BaneoController extends Controller
{
    public function baneo()
    {
        $baneos = Baneo::all();
        return view('moderador/inicioM', compact('baneos'));
    }
}
