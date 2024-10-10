<?php
// import files 
require_once __DIR__."../../classes/Movies.php";



$movies = [
        // Create instances
        new Movie("Inception", ["Sci-Fi","Action"],2010, 8.8 ),
        new Movie("The Godfather", ["Crime"],1972, 9.2),
        new Movie("The Dark Knight", ["Action"],2008, 9.0),
        new Movie("Forrest Gump", ["Drama"],1994, 8.8),
        new Movie("The Matrix", ["Sci-Fi"],1999, 8.7),
 ];
?>