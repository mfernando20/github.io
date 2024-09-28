<?php

namespace App\Controllers;

use App\Models\ContactUsModel; // Make sure you have a model for your contact_us table

class ContactUsController extends BaseController
{
    public function store()
    {
        // Get the JSON input from the request
        $json = $this->request->getJSON();

        // Initialize the response array
        $response = [];

        // Validate input (you can extend this validation as needed)
        if (empty($json->user_name) || empty($json->user_email) || empty($json->message)) {
            $response['success'] = false;
            $response['error'] = 'All fields are required.';
            return $this->response->setJSON($response);
        }

        // Prepare data for database
        $data = [
            'user_name' => $json->user_name,
            'user_email' => $json->user_email,
            'message' => $json->message,
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Load your model and save the data
        $contactUsModel = new ContactUsModel();
        if ($contactUsModel->insert($data)) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
            $response['error'] = 'Database error: ' . implode(', ', $contactUsModel->errors());
        }

        return $this->response->setJSON($response);
    }
}
