<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Jhun Norman Alonzo',
            'email' => 'alonzojhunnorman@gmail.com',
            'password' => bcrypt('password')
        ]);

        UserDetail::create([
            'user_id' => $user->id,
            'firstname' => 'Jhun Norman',
            'lastname' => 'Alonzo',
            'address' => 'Cagayan Valley',
            'contact_number' => '09361246825',
            'gender' => 'M'
        ]);

        $role = Role::findByName('super-admin');
        $user->assignRole($role);
    }
}
