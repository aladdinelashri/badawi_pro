<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = \App\Models\Role::factory()->create([
            'name' => 'USER',
            'note'=> 'ROLE OF USER',
        ]);

        $role = \App\Models\Role::factory()->create([
            'name' => 'ADMINISTRATOR',
            'note'=> 'ROLE OF ADMINISTRATOR',
            
        ]);

        
        $role = \App\Models\Role::factory()->create([
            'name' => 'MANAGER',
            'note'=> 'ROLE OF MANAGER',
            
        ]);

      
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
             'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => '1',
            'role_id' => '2',
            

        ]);

         $user = \App\Models\User::factory()->create([
            'name' => 'employee',
            'email' => 'employee@example.com',
             'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => '0',
            'role_id' => '1',

        ]);

         $user = \App\Models\User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => '0',
            'role_id' => '3',

        ]);
    }
    }

