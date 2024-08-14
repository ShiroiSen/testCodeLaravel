<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRooms extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function teachers()
    {
        return $this->belongsToMany(Teachers::class);
    }

    public function students()
    {
        return $this->belongsToMany(Students::class);
    }
}
