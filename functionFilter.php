<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Filters</title>
</head>
<body>
    <?php 

        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name'=> 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name'=> 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear'=> 2011,
                'purchaseUrl'=> 'http://example.com'
            ],
        ];

        function filterByAuthor($books, $author)
            {
                $filteredBooks = [];

                foreach ($books as $book){
                    if ($book['author'] === $author){
                        $filteredBooks[] = $book; // append this book as a new item on this array
                    }
                }

                return $filteredBooks;
            }
        ?>

        <ul>
            <?php foreach(filterByAuthor($books, 'Andy Weir') as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?>(<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
</body>
</html>