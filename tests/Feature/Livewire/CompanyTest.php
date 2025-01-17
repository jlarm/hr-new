<?php

use Database\Seeders\RoleAndPermissionSeeder;

beforeEach(function () {
    $this->seed(RoleAndPermissionSeeder::class);
});

it('cannot see company index if guest', function () {
    $response = $this->get(route('company.index'));

    $response->assertRedirect(route('login'));
});

it('can see company index if manager', function () {
    $response = asManager()
        ->get(route('company.index'));

    $response->assertOk();
});

it('can see company index if super admin', function () {
    $response = asSuperAdmin()
        ->get(route('company.index'));

    $response->assertOk();
});
