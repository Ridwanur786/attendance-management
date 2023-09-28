<?php

namespace App\Models;

use App\Models\HomeWork;
use App\Models\AttendanceReport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'class',
        'attendance'
       
    ];


    public function homework(){
        return $this->hasOne(HomeWork::class, 'student_id');
    }

    public function attendence_reports(){
        return $this->hasOne(AttendanceReport::class, 'report_id');
    }
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'attendance' => 'array',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
