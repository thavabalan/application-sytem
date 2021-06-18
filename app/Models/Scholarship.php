<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'opening_date',
        'closing_date',
        'elegibility'
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
