<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateCompanyForm extends Form
{
    #[Validate('required|string|min:3|max:255|unique:companies,name')]
    public string $companyName = '';

    #[Validate('required|string|min:2|max:255')]
    public string $employeeName = '';

    #[Validate('required|email|unique:users,email')]
    public string $employeeEmail = '';
}
