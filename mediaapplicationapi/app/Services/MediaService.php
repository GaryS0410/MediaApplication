<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MediaService {
    public function getPopularMovies() {
        return Http::get(config('services.tmdb.base_url') . '/movie/popular', [
            'api_key' => config('services.tmdb.api_key')
        ])->json(); 
    }

    public function searchForMovie(string $query) {
        return Http::get(config('services.tmdb.base_url') . '/search/movie/', [
            'api_key' => config('services.tmdb.api_key'),
            'query' => $query,
        ])->json();
    }
}