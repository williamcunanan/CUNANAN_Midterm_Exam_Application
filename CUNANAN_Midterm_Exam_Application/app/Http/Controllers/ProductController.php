<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            [
                'title' => 'The Avengers',
                'genre' => 'Superhero',
                'year' => 2012,
                'imdb' => 8.0,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BNGE0YTVjNzUtNzJjOS00NGNlLTgxMzctZTY4YTE1Y2Y1ZTU4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Avengers: Age of Ultron',
                'genre' => 'Superhero',
                'year' => 2015,
                'imdb' => 7.3,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BODBhYTg1NGQtNGVmNS00ZTdiLThjYTYtZDFkNzRiNTZmNDZjXkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Avengers: Infinity War',
                'genre' => 'Superhero',
                'year' => 2018,
                'imdb' => 8.4,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Avengers: Endgame',
                'genre' => 'Superhero',
                'year' => 2019,
                'imdb' => 8.4,
                'poster' => 'https://m.media-amazon.com/images/I/81ai6zx6eXL._AC_SY679_.jpg'
            ],
            [
                'title' => 'Captain America: Civil War',
                'genre' => 'Superhero',
                'year' => 2016,
                'imdb' => 7.8,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMjQ0MTgyNjAxMV5BMl5BanBnXkFtZTgwNjUzMDkyODE@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'title' => 'Black Panther',
                'genre' => 'Superhero',
                'year' => 2018,
                'imdb' => 7.3,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg'
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'genre' => 'Superhero',
                'year' => 2021,
                'imdb' => 8.2,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BMmFiZGZjMmEtMTA0Ni00MzA2LTljMTYtZGI2MGJmZWYzZTQ2XkEyXkFqcGc@._V1_.jpg'
            ],
            [
                'title' => 'Doctor Strange in the Multiverse of Madness',
                'genre' => 'Superhero',
                'year' => 2022,
                'imdb' => 6.9,
                'poster' => 'https://m.media-amazon.com/images/M/MV5BN2YxZGRjMzYtZjE1ZC00MDI0LThjZmQtZTZmMzVmMmQ2NzBmXkEyXkFqcGc@._V1_.jpg'
            ]
        ];

        return view('welcome', compact('movies'));
    }
}
