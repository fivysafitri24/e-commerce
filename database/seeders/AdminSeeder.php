<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = 
        [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123'),
                'is_admin' => true,
            ]
        ];
        User::insert($admin);
    }
}
