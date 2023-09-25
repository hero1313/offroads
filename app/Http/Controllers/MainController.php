<?php

namespace App\Http\Controllers;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index(){
       return view('demo.index');
   }

 
}
