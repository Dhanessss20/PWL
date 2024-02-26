<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function halaman() {
        return view('HalamanHome');
    }

    public function food() {
        return view('FoodBeverage', ['food' => 'Food & Beverages']);     
    }

    public function beauty() {
        return view('BeautyHealth', ['beauty' => 'Beauty & Health']);     
    }
    
    public function kid() {
        return view('BabyKid', ['baby' => 'Baby & Kid']);     
    }
    
    public function home() {
        return view('HomeCare', ['home' => 'Home & Care']);     
    }

    public function profil($id, $name){
        return view('Profil', ['id' => $id, 'name' => $name]);
    }

    public function transaksi($transaksi = null) {
        return view('Transaksi', ['transaksi' => $transaksi]);
    }
    

}
