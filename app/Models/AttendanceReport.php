<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttendanceReport extends Model
{
    use HasFactory;


    protected $fillable = ['report_id', 'status'];

    public function attendStudent(){
        return $this->belongsTo(Students::class,'report_id');
    }
}
