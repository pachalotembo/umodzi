<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class innovations extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'project_name',
        'project_goals',
        'other_services',
        'individual_skills',
        'raised_funding',
        'project_registration',
        'pending_funding',
        'registration_type',
        'project_type',
        'organisation_services',
        'development_stage',
        'current_invest',
        'market_type',
        'solve_problems',
        'competitors',
        'usefulness',
        'cost',
        'technological_idea',
        'time_to_market',
        'accessibility',
        'support_needed',
        'documents',
    ];
}
