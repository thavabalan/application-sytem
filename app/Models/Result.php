<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'exam_id',
        'grade',
        
    ];
    public function exam()
{
    return $this->belongsTo(Exam::class);
}
}
