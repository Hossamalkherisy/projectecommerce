<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ra extends Controller
{
    public function fun2($id=5){
    	$arr = array('id' => $id );
    	return view ('newv',$arr);
    }
}
