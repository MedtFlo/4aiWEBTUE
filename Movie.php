<?php
/**
 * Created by PhpStorm.
 * User: Flo
 * Date: 13.11.2017
 * Time: 11:32
 */

require_once "vendor/autoload.php";

use HTL3R\KungFuMovies;
use Endroid\QrCode;

class Movie extends KungFuMovies\AbstractKungFuMovie implements KungFuMovies\IKungFuMovie
{

    public function __construct(string $name, int $rating, string $movieURI)
    {
        parent::__construct($name,$rating,$movieURI);
    }

    public function getMovieInfoAsJSON(): string
    {
        $data = [name=>parent::getName(),rating=>parent::getRating(),uri=>parent::getMovieURI()];
        header('Content-Type: application/json');
        return json_encode($data);
    }

    public function getMovieQRCodeForBrowser(): string
    {
        $qr = new QrCode\QrCode(parent::getMovieURI());
        return $qr;
    }
}