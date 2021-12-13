<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";
    protected $primaryKey = "subject_id";
    protected $fillable = ["start", "end"];

    public function isTaughtBy(){
        return $this->hasOne(Professor::class, 'professor_id');
    }

    public function isTaughtOnRoom(){
        return $this->hasMany(Classroom::class, 'classroom_id');
    }



}
