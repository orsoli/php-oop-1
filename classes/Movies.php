<?php 
// Import files
require_once __DIR__."/Genres.php";

/**
 * Defie Movie
 */
 class Movie{
    // AProperties
    public string $title;
    public string $genre;
    public int $year;
    public float $rate;

    // Constructor method
    public function __construct(string $title, string $genre,int $year,float $rate)
    {
        $this->title=$title;
        $this->genre=$genre;
        $this->year=$year;
        $this->rate=$rate;
    }

 };

 $movies = [
        // Create instances
        new Movie("Inception", "Sci-Fi",2010, 8.8 ),
        new Movie("The Godfather", "Crime",1972, 9.2),
        new Movie("The Dark Knight", "Action",2008, 9.0),
        new Movie("Forrest Gump", "Drama",1994, 8.8),
        new Movie("The Matrix", "Sci-Fi",1999, 8.7),
 ];