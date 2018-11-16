<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Nomel Contacts';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'imong mama about';
        return view('pages.about' , compact('title'));
    }

    public function services(){
        $data = array(

            'title' => 'Services dha pungkol ka. Pili sa ubos kung unsa imong gusto',
            'services' => ['Kaon','Tog','Duwa']

        );
        return view('pages.services')->with($data);
    }
}
