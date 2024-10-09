<?php 
/**
 * Defie Movie
 */
 class Movie{
    // AProperties
    public string $title;
    public string $genre;
    public int $year;
    public int $rate;

    // Constructor method
    public function __construct(string $title, string $genre,int $year,int $rate)
    {
        $this->title=$title;
        $this->genre=$genre;
        $this->year=$year;
        $this->rate=$rate;
    }

 }