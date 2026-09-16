<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'department',
        'credit_completed',
        'cgpa',
        'advisor_id',
    ];
    protected $casts = ['cgpa' => 'decimal:2',];
    public function advisor()
    {
        return $this->belongsTo(Professor::class, 'advisor_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments')->withPivot('semester', 'grade')->withTimestamps();
    }
}
