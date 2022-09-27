<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orguser extends Model
{
    use HasFactory;

    protected $fillable = [
        'organisation_name',
        'organisation_regnum',
        'country',
        'firstname',
        'lastname',
        'gender',
        'date',
        'email',
        'nationality',
        'representative_country',
        'password',
        'role',
    ];
}
