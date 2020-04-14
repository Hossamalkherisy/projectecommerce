<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itcontroller extends Controller
{
 public function itfun1($x1=0 , $x2=0 , $x3=0 , $x4=0 , $x5=0 ){
	$arr = array('0' =>$x1 ,'1' =>$x2 ,'2' =>$x3 ,'3' =>$x4 ,'4' =>$x5  );
	return view('itview',$arr);
}

public function itfun2($y=5){
	return view('itview2');
}
}
