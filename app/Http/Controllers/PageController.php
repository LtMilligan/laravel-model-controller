<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = 'Homepage';
        $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sapiente ad odit itaque nisi accusamus ipsam perspiciatis quod animi culpa explicabo tenetur qui quo voluptates cumque, pariatur reiciendis expedita veniam.";
        return view('home', compact('title', 'description'));
    }

    public function contacts() {
        return 'Pagina contatti';
    }
}
