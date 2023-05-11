<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getdata(Request $request)
    {
        //Validate, the preferred way
        $request->validate([
            //Must match name attribute for the element that needs validation
            'usernameinput' => 'required | max:10',
            'passwordinput' => 'required | min:4'
        ]);

        return $request->input();

        
        
        //Alt 1
        // $inputedUsername = $request->input()['usernameinput'];        
        // $inputedPassword = $request->input()['passwordinput'];
        //Alt 2
        // $inputedUsername = $request->input('usernameinput');        
        // $inputedPassword = $request->input('passwordinput');
        //Alt 3
        // $inputedUsername = $request->usernameinput;
        // $inputedPassword = $request->passwordinput;
        // return view('succeslogin', ['username' => $inputedUsername, 'password' => $inputedPassword]);

        //Returns a static/constant user ->debug
        // return view('succeslogin', ['username' => 'Pelle Svanslös', 'password' => '123villhaensvans56789']);
    }
}
