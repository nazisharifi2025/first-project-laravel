<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
    protected $Name;
    public function __construct(){
         $this->Name = strtoupper("Constructor");
    }

    //
    public function index(){
        return view("home");
    }
    public function show(){
        return $this->Name;
    }
    // protected
     public function Prot(){
       return $this->privetFunction();
    }
    private function privetFunction(){
        return strtoupper("this page is for work acssesMorifaier Privet ");
    }
   

}
