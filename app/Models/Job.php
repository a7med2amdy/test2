<?php

namespace App\Models;

use App\Models\User;
use App\Models\JobType;
use App\Models\AppliedJobs;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    use HasFactory;
    protected $table = 'users_jobs';
    protected $guarded = ['id']; 


    //Relationships

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function saved_job()
    {
        return $this->belongsTo(Saved_Job::class);
    }

    public function applied_job()
    {
        return $this->belongsTo(AppliedJobs::class);
    }
    

    

    public function job_type()
    {
        return $this->belongsTo(JobType::class);
    }

    
    public function featured_job(): HasOne
    {
        return $this->hasOne(FeaturedJob::class);
    }

}
