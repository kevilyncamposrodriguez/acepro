<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    protected $fillable = [
        "start_date", "end_date", "class_date", "name", "description","seminar_image","team_id","active"
    ];
}
