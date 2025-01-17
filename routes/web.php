<?php

use App\Livewire\Company\Index;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', Dashboard::class)
        ->name('dashboard');

    Route::get('companies', Index::class)
        ->name('company.index');

    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__ . '/auth.php';
