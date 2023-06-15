<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Administrator',
                'nis' => '',
                'email' => 'admin@gmail.com',
                'password' => password_hash('pass1234', PASSWORD_BCRYPT),
                'role' => 'admin'
            ],
            [
                'name' => 'Andi purwalana',
                'nis' => 10255,
                'email' => 'andiseptiawandi@gmail.com',
                'password' => password_hash('pass1234', PASSWORD_BCRYPT),
                'role' => 'siswa'
            ]
        ];
    
        $this->db->table('users')->insertBatch($data);
    }
    
}
