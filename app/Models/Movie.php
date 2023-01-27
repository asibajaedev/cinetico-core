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

    public function get_movies(){
        return Movie::all();
    }

    public function get_movie_by_id($id){
        $movie = Movie::find($id);

        if (isset($movie->movie_id)) {
            return $movie;
        } else {
            return [
                "code"=>"01",
                "message"=>"La pelicula con el identificador $id no existe"
            ];
        }
    }

    public function create($request){
        $movie = new Movie();
        $movie->gender_id = $request->gender_id;
        $movie->classification_id = $request->classification_id;
        $movie->name = $request->name;
        $movie->synopsis = $request->synopsis;
        $movie->release_date = $request->release_date;

        $movie->save();

        return $movie;
    }
}
