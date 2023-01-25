<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaType extends Model
{
    use HasFactory;

    protected $table = 'cinema_types';
    protected $primaryKey = 'cinema_type_id';

    public $timestamps = false;
}
