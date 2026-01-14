<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MediaService {
    protected $baseUrl;
    protected $apiKey;

    public function __construct() {
        $this->baseUrl = config('services.tmdb.base_url');
        $this->apiKey = config('services.tmdb.api_key');
    }

    public function getPopularMovies() {
        return Http::get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey
        ])->json(); 
    }

    public function searchForMovie(string $query) {
        return Http::get("{$this->baseUrl}/search/movie", [
            'api_key' => $this->apiKey,
            'query'   => $query,
        ])->json();
    }

    public function getPopularShows(){
        return Http::get("{$this->baseUrl}/tv/popular", [
            'api_key' => $this->apiKey,
        ])->json();
    }

    public function searchForShow(string $query) {
        return Http::get("{$this->baseUrl}/search/tv", [
            'api_key' => $this->apiKey,
            'query' => $query,
        ])->json();
    }
}