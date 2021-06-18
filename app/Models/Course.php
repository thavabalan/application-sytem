<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department',
        'elegibility_criteria',
        'degree_in_view',
        
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}