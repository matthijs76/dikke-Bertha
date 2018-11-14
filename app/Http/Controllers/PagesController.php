<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //$agendas = Agenda::all();
        return view('agenda' );
    }
}
