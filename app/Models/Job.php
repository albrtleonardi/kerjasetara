<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'job_title', 'location', 'remote', 'disability_friendly',
        'job_type', 'salary_range', 'job_description', 'required_skills',
        'disability_types_supported', 'application_deadline', 'contact_email'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
