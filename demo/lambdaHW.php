<?php 
        $books = [
            [
                'name' => 'Do Android Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        // Filter for books by Andy Weir published between 1950 and 2020
        $filteredBooks = array_filter($books, function ($book){
            return $book['author'] === 'Andy Weir' && $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
        });

    require "lambdaHW.view.php";
    ?>

