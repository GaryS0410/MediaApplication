import type { Movie, TMDBMovieResponse } from "../types";

const BASE_URL = "http://mediaapplicationapi.test/api";

export const getPopularMovies = async (): Promise<Movie[]> => {
    const response = await fetch(`${BASE_URL}/movies/popular`);
    const { data }: TMDBMovieResponse = await response.json();
    return data.results; 
};