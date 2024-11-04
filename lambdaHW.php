<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMBDA HOMEWORK</title>
</head>
<body>
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
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>" >
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?> - By <?= $book['author'] ?>
            </a>
                </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>