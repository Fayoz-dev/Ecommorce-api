<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = User::create([

            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '+9989999999',
            'password' => Hash::make('secret123'),

        ]);

       $admin -> roles() -> attach(1);

       User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}
