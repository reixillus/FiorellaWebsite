<?php
namespace App\Controllers;
use App\Models\userModel;

class User extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    // public function index()
    // {
    //     $user_model = new UserModel();
    //     $data['users'] = $user_model->findAll();
    //     return view('account_management/dashboard', $data); // Load dashboard view with user data
    // }

    

    public function add()
    {
        $user_model = new userModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'contactno' => $this->request->getPost('contactno'),
            'password' => $this->request->getPost('password'),
            //'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            // 'role' => "user", 
            // 'status' => "active",
        ];
        $user_model->insert($data);

        // Auto login after registration
        if(!$this->session->get('isLoggedIn')) {
            $username = $this->request->getPost('username'); // Get username from form
            $user = $user_model->getUserByUsername($username); // Fetch user data from DB
            $this->session->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true,
            ]);
        }
        return redirect('/');


    }
}