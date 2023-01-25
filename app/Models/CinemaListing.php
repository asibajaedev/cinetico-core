<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaListing extends Model
{
    use HasFactory;

    protected $table = 'cinema_listings';
    protected $primaryKey = 'cinema_listing_id';
    public $timestamps = false;
}
