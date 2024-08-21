<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }


   
}
