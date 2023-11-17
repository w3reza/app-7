<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index(int $id)
    {
        
        $name = "Donald Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        
        $name="access_token";
        $value="123-XYZ";
        $expTime=10;
        $path="/";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=true;
        $httpOnly=true;
        $setCookie = cookie($name,$value,$expTime,$path,$domain,$secure,$httpOnly);

        return response($data, 200)->cookie($setCookie);
        
       
    }
}
