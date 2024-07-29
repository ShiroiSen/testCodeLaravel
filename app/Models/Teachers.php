<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender'];

    public function classes()
    {
        return $this->belongsToMany(ClassRooms::class);
    }
}
