<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FirstUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'uuid' => Str::uuid(),
            'name' => 'Joe Lohr',
            'email' => 'jlohr@autorisknow.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Super Admin');
    }
}
