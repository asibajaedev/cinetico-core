<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastType extends Model
{
    use HasFactory;

    protected $table = 'cast_types';
    protected $primaryKey = 'cast_type_id';
    public $timestamps = false;
}
