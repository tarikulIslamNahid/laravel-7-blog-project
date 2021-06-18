<?php

use App\roles;
use Illuminate\Database\Seeder;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin=roles::create(['name' => 'superadmin']);
        $user=roles::create(['name' => 'user']);
        $suspend=roles::create(['name' => 'suspend']);
    }
}
