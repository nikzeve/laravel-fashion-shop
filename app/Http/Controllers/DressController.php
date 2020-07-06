<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index() {
        $all_clothes = Dress::all();
    }
}
