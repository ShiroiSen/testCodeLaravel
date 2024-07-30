<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'classroom_id'];

    public function student_classroom()
    {
        return $this->belongsToMany(ClassRooms::class);
    }
}
