<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

/**
 * 
 */
class Auth extends BaseController
{

	public function __construct()
    {
        $this->db = \Config\Database::connect(); // Connect to the database
    }
	
	public function login()
	{
		return view('login');
	}

	public function register()
    {
        return view('register'); // Ensure 'register' view exists
    }

    public function store()
    {
        // Load the form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, show the register form again
            return view('register');
        } else {
            // Prepare data for insertion
            $data = [
                'full_name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'country_of_origin' => $this->request->getPost('country_of_origin'),
                'country_of_residence' => $this->request->getPost('country_of_residence'),
                'date_of_birth' => $this->request->getPost('date_of_birth'),
                'gender' => $this->request->getPost('gender'),
                'university_name' => $this->request->getPost('university_name'),
                'city' => $this->request->getPost('city'),
                'program_start_year' => $this->request->getPost('program_start_year'),
                'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash the password
            ];

            // Insert data into the database
            $this->db->table('users')->insert($data);

            // Redirect or show success message
            return redirect()->to('/login'); // Redirect to login after successful registration
        }
    }
}