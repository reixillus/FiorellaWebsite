<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function filled()
    {
        $model = new userModel(); // Load the UserModel


        $username = $this->request->getPost('username'); // Get username from form
        $password = $this->request->getPost('password'); // Get username from form

        $user = $model->getUserByUsername($username); // Fetch user data from DB

        // Verify user exists and password matches
        if ($user) {
            if ($password == $user['password']) 
            {
                $this->session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => true,
                ]);
                return redirect('/'); // Redirect to dashboard on success
            } else {
                // If login fails, show error message
                $this->session->setFlashdata('error', 'Invalid login credentials');
                return view('login');
            }
            // Store user data in session
            
        } 
    }

    public function login()
    {
        return view('login');
    }

    // Function to handle logout
    public function logout()
    {
        session()->destroy(); // Destroy session
        return redirect('/'); // Redirect to login page
    }

    // public function user_dashboard()
    // {
    //     return view('account_management/login_dashboard');
    // }
}