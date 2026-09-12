<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09123456788'
            ],
            [
                'fullname' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09123456787'
            ],
            [
                'fullname' => 'Ana Cruz',
                'email' => 'ana@gmail.com',
                'phone' => '09123456786'
            ],
            [
                'fullname' => 'Mark Lopez',
                'email' => 'mark@gmail.com',
                'phone' => '09123456785'
            ]
        ];

        return view('customers', $data);
    }
}