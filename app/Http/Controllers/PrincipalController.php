<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function chef() {
    return view('index');
}

public function card() {
    return view('cartaoVisita');
}

public function profile() {
    return view('perfilOnline');
}

}
