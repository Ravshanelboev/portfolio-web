<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class UserSeeder extends Seeder
{

    public function run(): void
    {

        $role = ModelsRole::create(['name' => 'admin']);
        $user = User::create([
            'first_name' => 'test',
            'last_name' => 'test',
            'phone' => '123456789',
            'email' => 'test@gmail.com',
            'password' => Hash::make('1'),
        ]);

        $user->assignRole($role);
    }
}
