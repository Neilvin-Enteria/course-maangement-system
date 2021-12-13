<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table = "professors";
    protected $primaryKey = "professor_id";
    protected $fillable = ["firstname", "lastname"];

    public function isTeaching(){
        return $this->hasMany(Subject::class, 'subject_id');
    }

}
