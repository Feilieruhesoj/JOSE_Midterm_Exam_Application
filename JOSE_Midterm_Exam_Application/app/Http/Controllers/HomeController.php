<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'cast' => ['Tim Robbins', 'Morgan Freeman'],
                'genre' => 'Drama',
                'price' => 19.99,
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'cast' => ['Marlon Brando', 'Al Pacino'],
                'genre' => 'Crime, Drama',
                'price' => 24.99,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'cast' => ['Christian Bale', 'Heath Ledger'],
                'genre' => 'Action, Crime, Drama',
                'price' => 29.99,
            ],
            [
                'title' => 'John Wick',
                'description' => 'A legendary hitman who comes out of retirement to seek revenge against the men who killed his dog, a final gift from his recently deceased wife.',
                'cast' => ['Keanu Reeves', 'Michael Nyqvist'],
                'genre' => 'Action, Crime, Noir',
                'price' => 26.99,
            ],
            [
                'title' => 'The Amazing Spider-Man',
                'description' => 'Teenager Peter Parker gains spider-like powers and fights crime as Spider-Man, attempting to balance heroics with his ordinary life. ',
                'cast' => ['Andrew Garfield', 'Emma Stone'],
                'genre' => 'Action, Romance, Superhero',
                'price' => 19.99,
            ],
        ];

        return view('home', ['movies' => $movies]);
    }
}