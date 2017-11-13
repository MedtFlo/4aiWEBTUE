<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 13.11.2017
 * Time: 11:26
 */

require_once "vendor/autoload.php";
require_once "Movie.php";

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$movie = new Movie("Bruce Lee - Der Mann mit der Todeskralle", 5, "https://www.youtube.com/watch?v=80wXmIcyZwk");

//echo '<h1>' . $movie->getName() . '</h1>';

echo $movie->getMovieInfoAsJSON();