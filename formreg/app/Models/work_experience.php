<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_experience extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'position',
        'company',
        'location',
        'start_date',
        'end_date',
        'still_working',
        'work_description',
        
        
    ];
}
