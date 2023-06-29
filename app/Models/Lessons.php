<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'file_path'
    ];

    public function courses() {
        return $this->belongsTo(Course::class);
    }

}
