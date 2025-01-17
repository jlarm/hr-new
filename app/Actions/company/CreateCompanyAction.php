<?php

namespace App\Actions\company;

use App\Enum\Status;
use App\Livewire\Forms\CreateCompanyForm;
use App\Models\Company;
use App\Models\User;
use App\Notifications\NewCompanyUserNotification;
use Illuminate\Support\Facades\DB;

class CreateCompanyAction
{
    public function __invoke(CreateCompanyForm $form): void
    {
        DB::transaction(function () use ($form) {
            $company = $this->createCompany($form->companyName);

            $user = $this->createUser($company, $form->employeeName, $form->employeeEmail);

            $user->profile()->create();

            $user->notify(new NewCompanyUserNotification($user, $company));
        }, 5);
    }

    private function createCompany($companyName): Company
    {
        return Company::create([
            'name' => $companyName,
            'status' => Status::PENDING,
        ]);
    }

    private function createUser($company, $name, $email): User
    {
        return $company->employees()->create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(str()->password()),
        ])->assignRole('Admin');
    }
}
