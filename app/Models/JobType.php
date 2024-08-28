<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobType extends Model
{
    use HasFactory;
    protected $table = 'job_types';
    protected $guarded = ['id']; 

    public function job(): HasOne
    {
        return $this->hasOne(Job::class);
    }
}
