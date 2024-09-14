<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
    public function grades(): BelongsToMany
    {
        return $this->belongsToMany(Grade::class);
    }
}
