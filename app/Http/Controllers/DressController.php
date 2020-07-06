<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class DressController extends Controller
{
    public function index() {
        $all_clothes = Dress::all();
        return view('dresses', ['dresses' => $all_clothes] );
    }
}
