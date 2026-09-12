<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'John Smith',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Sarah Lee',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Robert Tan',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff2',
                'fullname' => 'Kevin Cruz',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager',
                'fullname' => 'Lisa Gomez',
                'role' => 'Manager'
            ]
        ];

        return view('users', $data);
    }
}