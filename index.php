<?php
// Import php files
require_once __DIR__."/classes/Movies.php";
require_once __DIR__."/db/db.php";

// Read in JSON
header("Content-Type: application/JSON");
// Convert in JSON from php
echo json_encode($movies, JSON_PRETTY_PRINT);
?>