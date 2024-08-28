<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Saved_Job extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function job()
    {
       return $this->belongsTo(Job::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
