<?php

use App\Models\User;
use Database\Seeders\RoleAndPermissionSeeder;
use Livewire\Volt\Volt;

beforeEach(function () {
    $this->seed(RoleAndPermissionSeeder::class);

    $user = User::create([
        'name' => 'Test User',
        'email' => 'email@email.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
    ])->assignRole('Admin');

    $this->actingAs($user);
});

it('can render', function () {
    $component = Volt::test('logout');

    $component->call('logout')
        ->assertRedirect(route('welcome'));
});
