<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'contactno', 'password'];

    // Insert a new user
   

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}?>