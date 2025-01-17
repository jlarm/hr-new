<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'main_emergency_name',
        'main_emergency_phone',
        'emergency_contacts',
        'timezone',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'emergency_contacts' => 'array',
        ];
    }
}
