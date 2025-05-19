<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'dob',
        'gender',
        'email',
        'address',
        'city',
        'state',
        'prefers_night_shift',
        'prefers_day_shift',
        'work_from_home',
        'work_from_office',
        'field_job',
        'employment_type',
        'resume',
        'active_user',
        'last_login',
        'total_jobs_applied',
        'total_job_views',
        'otp',
    'otp_expires_at',
    ];

    public function educations()
    {
        return $this->hasMany(CandidateEducation::class);
    }

    public function experiences()
    {
        return $this->hasMany(CandidateExperience::class);
    }

    public function skills()
    {
        return $this->hasMany(CandidateSkill::class);
    }

    public function languages()
    {
        return $this->hasMany(CandidateLanguage::class);
    }
}
