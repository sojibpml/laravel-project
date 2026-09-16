<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $fillable = ['title', 'credits', 'department'];
    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professor_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments')->withPivot('semester', 'grade')->withTimestamps();
    }
}
