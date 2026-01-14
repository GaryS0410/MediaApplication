export interface Movie {
  id: number;
  title: string; 
  poster_path: string;
  release_date: string; 
  vote_average: number; 
  overview: string; 
}

export interface TMDBMovieResponse {
  data: {
      results: Movie[];
  }
}