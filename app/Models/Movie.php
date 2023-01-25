<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primaryKey = 'movie_id';

    /**
     * This function returns the gender of the movie object
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gender(){
        return $this->hasOne(Gender::class, 'gender_id');
    }
}
