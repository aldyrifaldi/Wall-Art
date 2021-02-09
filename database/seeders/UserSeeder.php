<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Wall art',
            'email' => 'admin@wallart.com',
            'password' => Hash::make('admin'),
            'phone_number' => '0852424335232'
        ]);

        $user->assignRole('admin');
    }
}
