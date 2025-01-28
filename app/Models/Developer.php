<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /** @use HasFactory<\Database\Factories\DeveloperFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'years_experience_php' => 'integer',
        'years_experience_other' => 'integer',
        'is_employed_as_dev' => 'boolean',
        'ide' => 'string',
        'willing_to_appear_on_camera' => 'boolean',
        'has_video_experience' => 'boolean',
        'interested_in_learning_laravel' => 'boolean',
        'weekly_time_available' => 'integer',
        'learning_goal' => 'string',
        'php_framework_experience' => 'array',
        'learning_challenges' => 'string',
        'preferred_learning_method' => 'string',
        'desired_project_type' => 'string',
        'laravel_topics' => 'string',
        'struggles' => 'string',
        'comments' => 'string',
    ];
}
