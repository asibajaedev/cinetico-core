<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Returns all the movies from database
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get_movies(){
        $movie = new Movie();
        return $movie->get_movies();
    }

    /**
     * Get movie based on the id
     *
     * @param Request $request
     * @return string[]
     */
    public function get_movie(Request $request){
        $movie = new Movie();
        return $movie->get_movie_by_id($request->id);
    }

    public function create_movie(CreateMovieRequest $request){

        try {
            $movie = new Movie();
            return $movie->create($request);
        } catch (\Exception $e){
            return response()->json($e);
        }

    }
}
