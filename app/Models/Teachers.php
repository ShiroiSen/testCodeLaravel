<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'classroom_id'];

    public function teacher_classroom()
    {
        return $this->belongsToMany(ClassRooms::class);
    }
}
