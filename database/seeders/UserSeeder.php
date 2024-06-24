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
        $userData = [
            [
                'name' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password'=> bcrypt('123456'),
            ],

            [
                'name' => 'dosen',
                'email' => 'dosen@gmail.com',
                'role' => 'dosen',
                'password'=> bcrypt('654321'),
            ],

            [
                'name' => 'operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password'=> bcrypt('112233'),
            ],
            
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
