<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showOptions(){
        return view('options');
    }

    public function showEditQuestion(){
        return view('editquestion');
    }
    
    public function showNewGame(){
        return view('newgame');
    }
    
    public function showNewQuestion(){
        return view('newquestion');
    }
    
    public function showOnePlayer(){
        return view('oneplayer');
    }
    
    public function showGame(){
        return view('game');
    }
    
    public function showResult(){
        return view('result');
    }
}
