<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex()
    {
        #1 process any parameters...
        #2 talk to the model
        #3 receive data back
        #4 process the data again
        #5 pass the data to the correct view

        return view('/pages/welcome');
    }

    public function getAbout()
    {

        $firstName = "Alexandru";
        $lastName = "Nita";

        $email = "alexandru.nita14@gmail.com";

        $data = [];
        $data['firstName'] = $firstName;
        $data['lastName'] = $lastName;

        return view('/pages/about')->with("data",$data)->with("email",$email);
    }

    public function getContact()
    {
        return view('/pages/contact'); 
    }
}