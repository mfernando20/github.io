<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_name', 'user_email', 'message', 'created_at'];
    
    // Optional: Define validation rules if needed
    protected $validationRules = [
        'user_name' => 'required|min_length[3]',
        'user_email' => 'required|valid_email',
        'message' => 'required|min_length[10]',
    ];

    protected $validationMessages = [
        'user_name' => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long'
        ],
        'user_email' => [
            'required' => 'Email is required',
            'valid_email' => 'Please provide a valid email address'
        ],
        'message' => [
            'required' => 'Message is required',
            'min_length' => 'Message must be at least 10 characters long'
        ],
    ];
}
