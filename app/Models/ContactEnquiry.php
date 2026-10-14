<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    protected $fillable = ['name', 'company', 'email', 'phone', 'message'];

    protected function casts(): array
    {
        return ['emailed_at' => 'datetime'];
    }
}
