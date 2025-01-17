<?php

namespace App\Models;

use App\Enum\State;
use App\Enum\Status;
use App\Observers\CompanyObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy(CompanyObserver::class)]

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'status',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(User::class);
    }

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'address' => 'string',
            'city' => 'string',
            'state' => State::class,
            'zip' => 'string',
            'phone' => 'string',
            'status' => Status::class,
        ];
    }
}
