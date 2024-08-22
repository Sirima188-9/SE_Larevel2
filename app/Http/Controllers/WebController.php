<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function myshop()
    {
        $address = "IT CP KKU";
        $mobilephone = "0888888888";
        $locatinn = "Khon Kaen";
        $name = "Sirima";

        return view ('myshop',[
            'address'=>$address,
            'mobilephone'=>$mobilephone,
            'locatinn'=>$locatinn,
            'name'=>$name,
        ]);
    }
}
