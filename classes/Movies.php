<?php 
// Import files
require __DIR__."/Genres.php";
require __DIR__."../../db/db.php";

/**
 * Defie Movie
 */
 class Movie{
    // AProperties
    public string $title;
    public array $genre;
    public int $year;
    public float $rate;

    // Constructor method
    public function __construct(string $title, array $genre,int $year,float $rate)
    {
        $this->title=$title;
        $this->genre=$genre;
        $this->year=$year;
        $this->rate=$rate;
    }

 };