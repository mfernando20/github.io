<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Connect to the database
    }



    
    public function index()
    {
        return view('home'); // Load home view
    }

    public function login()
    {
        return view('login'); // Load login view
    }

    public function register()
    {
        return view('register'); // Load register view
    }
}



