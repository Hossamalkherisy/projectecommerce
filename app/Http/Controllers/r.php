<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class r extends Controller
{
    public function r3($x1=0,$x2=0,$x3=0,$x4=0,$x5=0){
    	
 $arr= array('x1' => $x1,'x2' => $x2,'x3' => $x3,'x4' => $x4,'x5' => $x5 );
    	return view('rrr',$arr);
    }
}
