<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index($id)
    {
        
        $name = "Donald Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        
        $name="Assignment-8";
        $value="Assignment-8";
        $expTime=60;
        $path="/";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=true;
        $httpOnly=true;
        $setCookie = cookie($name,$value,$expTime,$path,$domain,$secure,$httpOnly);

        return response($data, 200)->cookie($setCookie);
        
       
    }
}
