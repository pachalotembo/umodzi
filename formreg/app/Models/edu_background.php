<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edu_background extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'highest_qualification',
        'institution',
        'location',
        'start_date',
        'graduation_date',
        'not_graduated',
        'description',
        
        
    ];
}
