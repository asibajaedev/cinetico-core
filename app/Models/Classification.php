<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Classification extends Model
{
    use HasFactory;

    protected $table = 'classifications';
    protected $primaryKey = 'classification_id';
    public $timestamps = false;
}
