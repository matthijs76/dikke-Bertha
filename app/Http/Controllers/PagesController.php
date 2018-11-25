<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function gallery1(){
        return view('gallery1');
    }
    public function contact() {
        return view('contact');
    }
    public function boeking_info() {
        return view('boeking_info');
    }
    public function agenda() {
        //$items = Item::all();
        return view('agenda' );
    }
    
}
