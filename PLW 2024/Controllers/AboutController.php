<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $nim = 2241720037;
        $name = 'Dhaneswara Haryo Satriagung';

        return "Nama : $name <br> NIM : $nim";
    }
}
