<?php

namespace App\Http\Controllers;

class appFoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    public function getAll(){
        return 'Daniel Developer';
    }

    public function get($id){
        return "get " . $id;
    }
}
