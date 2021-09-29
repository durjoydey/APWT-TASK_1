<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function registration(){
        return view("registration");
    }
    function register(Request_$request){
        $output = "<h1>Sumitted</h1>";
        $output.="Name: ".$request->name;
        $output.="<br>Username: ".$request->uname;
        $output.="<br>Email: ".$request->email;
        $output.="<br>Password: ".$request->password;
        $output.="<br>Address: ".$request->address;
        return $output;

    }
}
