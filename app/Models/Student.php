<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;


class Student extends Model
{
    use HasFactory;
    protected $primaryKey = "student_id";
    protected $keyType = "String";
    public $timestamps=false;

    public function project(): HasOne
    {
        return $this->hasOne(Project::class);
    }
}
