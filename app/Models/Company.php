<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $guarded = ['id']; 


    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
