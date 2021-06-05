<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scholarship_id',
        'course_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
