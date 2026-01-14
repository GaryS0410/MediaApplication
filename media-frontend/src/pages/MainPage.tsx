import React from 'react';
import { useState, useEffect } from "react"; 

import { getPopularMovies } from '../services/api';
import type { Movie } from "../types";

export const MainPage = () => {
  const [movies, setMovies] = useState<Movie[]>([]);
  const [error, setError] = useState<string | null>(null);
  const [loading, setLoading] = useState<boolean>(true);

  useEffect(() => {
    const loadPopularMovies = async () => {
      try {
        const movieArrayData = await getPopularMovies();
        setMovies(movieArrayData);
      } catch (err) {
        console.log(err);
        setError("Failed to load popular movies...");
      }
      finally {
        setLoading(false);
      };
    };

    loadPopularMovies();
  }, [])

  return (
    <div> 
      <div className="movies-grid">
        {movies && movies.map((movie) => (
          // Note the use of ( ) instead of { } after the => 
          // This ensures the component is returned!
          <div key={movie.id} className="movie-card" style={{ border: '1px solid #ccc', margin: '10px', padding: '10px' }}>
            <h3>{movie.title}</h3>
            <p>{movie.overview ? movie.overview.substring(0, 100) + "..." : "No description available."}</p>
          </div>
        ))}
      </div>
    </div>
    
  )
}

export default MainPage