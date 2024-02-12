<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt ('admin'),
                'role' => 'ADMIN'
            ],
            [
                'name' => 'Petugas',
                'username' => 'petugas',
                'password' => bcrypt ('petugas'),
                'role' => 'STAFF'
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}