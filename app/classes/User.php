<?php


namespace App\classes;


class User
{

    public function getAllUser()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Md. Shofi',
                'email' => 'admin@gmail.com',
                'password' => '123456'
            ],
            1 => [
                'id' => 2,
                'name' => 'Rafiq',
                'email' => 'rafiq@gmail.com',
                'password' => '121212'
            ],
            2 => [
                'id' => 2,
                'name' => 'Nuru',
                'email' => 'nuru@gmail.com',
                'password' => '222222'
            ],
        ];
    }
}