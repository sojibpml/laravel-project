<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'department', 'salary', 'hire_date'];
    protected $casts = [
        'hire_date' => 'date',
        'salary' => 'decimal:2'
    ];
    public function students()
    {
        return $this->hasMany(Student::class, 'advisor_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'professor_id');
    }
}
