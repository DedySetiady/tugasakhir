<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'ini adalah admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'pimpinan',
                'name' => 'ini adalah pimpinan',
                'email' => 'pimpinan@gmail.com',
                'level' => 'pimpinan',
                'password' => bcrypt('pimpinan123')
            ],
            [
                'username' => 'operator',
                'name' => 'ini adalah operator',
                'email' => 'operator@gmail.com',
                'level' => 'operator',
                'password' => bcrypt('operator123')
            ],
            [
                'username' => 'pelanggan',
                'name' => 'ini adalah pelanggan',
                'email' => 'pelanggan@gmail.com',
                'level' => 'pelanggan',
                'password' => bcrypt('pelanggan123')
                
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
