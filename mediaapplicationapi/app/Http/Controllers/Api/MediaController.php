<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MediaService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct(
        protected MediaService $mediaService
    ) {}

    public function popularMovies(): JsonResponse{
        try {
            $data = $this->mediaService->getPopularMovies();

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'line' => $e->getLine()
            ], 500);
        }
    }

    public function searchMovie(Request $request) : JsonResponse{
        $searchedMovie = $request->query('query');

        if(!$searchedMovie) {
            return response()->json(['message' => 'Search term invalid'], 400);
        }

        try {
            $data = $this->mediaService->searchForMovie($searchedMovie);

            return response()->json([
                'success' => true,
                'results' => $data['results']
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }

    }


    public function popularShows(): JsonResponse{
        try {
            $data = $this->mediaService->getPopularShows();

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'line' => $e->getLine()
            ], 500);
        }
    }

    public function searchShows(Request $request): JsonResponse{
        $searchedShow = $request->query('query');

        if(!$searchedShow) {
            return response()->json(['message' => 'Search term invalid'], 400);
        }

        try {
            $data = $this->mediaService->searchForMovie($searchedShow);

            return response()->json([
                'success' => true,
                'results' => $data['results']
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
 
}
