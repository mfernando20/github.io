<?php

// app/Models/UserModel.php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'full_name', 'email', 'phone_number', 
        'country_of_origin', 'country_of_residence', 
        'date_of_birth', 'gender', 
        'university_name', 'city', 
        'program_start_year', 'password_hash', 
        'created_at'
    ];
}


















?>