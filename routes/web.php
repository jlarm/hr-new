<?php

use App\Livewire\Company\Create;
use App\Livewire\Company\Index;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', Dashboard::class)
        ->lazy()
        ->name('dashboard');

    Route::get('companies', Index::class)
        ->lazy()
        ->name('company.index');

    Route::get('company/create', Create::class)
        ->name('company.create');

    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__ . '/auth.php';
