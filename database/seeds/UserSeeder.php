<?php

use App\User;
use Illuminate\Database\Seeder;
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
        $admin =User::create([
            'name' => 'Super Admin',
            'user_id' => 'superadmin15',
            'role_id' => 1,  // 1 is super admin
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $user =User::create([
            'name' => 'User ',
            'user_id' => 'user15',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
