<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function hello() {
    //     return 'Hello World';
    // }

    // public function selamat() {
    //     return 'Selamat Datang :)';
    // }

    // public function about() {
    //     return 'Nama: Dhaneswara Haryo Satriagung
    //     <br> NIM: 2241720037';
    // }

    // public function article($id) {
    //     return 'Halaman Artikel dengan ID '.$id;
    // }

    public function greeting() {
        return view('blog.hello')
        ->with('name', 'Dhanesss')
        ->with('occupation', 'Student');
    }
}
