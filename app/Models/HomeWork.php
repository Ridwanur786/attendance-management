<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeWork extends Model
{
    use HasFactory;


    protected $fillable = ['student_id', 'status'];

    public function student(){
        return $this->belongsTo(Students::class);
    }
}
