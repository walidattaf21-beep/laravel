<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the SmilePro demo users.
     */
    public function run(): void
    {
        $password = Hash::make('password');

        $users = [
            ['name' => 'Tandarts', 'email' => 'tandarts@smilepro.nl', 'rolename' => 'tandarts'],
            ['name' => 'Mondhygienist', 'email' => 'mondhygienist@smilepro.nl', 'rolename' => 'mondhygienist'],
            ['name' => 'Assistent', 'email' => 'assistent@smilepro.nl', 'rolename' => 'assistent'],
            ['name' => 'Praktijkmanagement', 'email' => 'praktijkmanagement@smilepro.nl', 'rolename' => 'praktijkmanagement'],
            ['name' => 'Patient', 'email' => 'patient@smilepro.nl', 'rolename' => 'patient'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => $password,
                    'rolename' => $user['rolename'],
                ]
            );
        }
    }
}
