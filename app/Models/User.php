<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'surname',
        'mobilenumber',
        'dob',
        'gender',
        'address',
        'nationality',
        'state',
        'lga',
        'profile',
        'admission_type',
        'guardian_firstname',
        'guardian_middlename',
        'guardian_surname',
        'guardian_email',
        'guardian_mobile',
        'guardian_contact',
        'guardian_gender',
        'jamb_no',
        'jamb_year',
        'jamb_sub1',
        'jamb_sub2',
        'jamb_sub3',
        'jamb_sub4',
        'jamb_sub1score',
        'jamb_sub2score',
        'jamb_sub3score',
        'jamb_sub4score',
        'is_hotel',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function files()
    {
        return $this->hasMany(Files::class);
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
