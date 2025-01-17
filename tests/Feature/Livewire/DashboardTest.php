<?php

use App\Livewire\Dashboard;
use App\Models\Company;
use App\Models\User;
use Database\Seeders\RoleAndPermissionSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->seed(RoleAndPermissionSeeder::class);

    $company = Company::create([
        'name' => 'Test Company',
    ]);

    //    $company->onboarding()->create();

    $user = User::create([
        'company_id' => $company->id,
        'name' => 'Test User',
        'email' => 'email@email.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
    ])->assignRole('Admin');

    $this->actingAs($user)->withSession(['company' => $company]);
});

it('renders successfully', function () {
    Livewire::test(Dashboard::class)
        ->assertStatus(200);
});
