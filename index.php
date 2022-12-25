<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body><
    <?php

//This code will add a filtering feature to the search books feature

        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' =>  '1999',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' =>  '1978',
                'purchaseUrl' => 'http://example.com'
            ],
        ];
        function filterByAuthor($books, $author) 
        {
           $filteredBoooks = [];
            foreach ($books as $book) 
            {
                if ($book ['author'] === $author) 
                {
                    $filteredBoooks[] = $book;
                }
            }
                return $filteredBoooks;
        }
    ?>
<!--Initially, I harcoded the code to filter the books ($book['author'] === 'Andy Weir'), but this is unpractical. So I create a function to automate the process-->

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        <li>
            <a href="<?= $book ['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book ['releaseYear'] ?>) By <?= $book['author']?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>