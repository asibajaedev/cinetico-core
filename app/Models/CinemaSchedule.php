<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaSchedule extends Model
{
    use HasFactory;

    protected $table = 'cinema_schedules';
    protected $primaryKey = 'cinema_schedule_id';
    public $timestamps = false;
}
