<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
                'name' => 'Kyaw Kyaw',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1
            ]);

        $user->assignRole('Super Admin');
    }
}
