<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>

<!--The code from the last commit is not flexible, imagine that instead of filtering by Author, I want to filter by year, would I copy ans paste the function? That's not the best idea at all. So, tweaked my code-->

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
        // This  function filterByAuthor($books, $author) is a name function. I also can create anonymous functions that I can assign to a variable or pass it to another functions. 
        //I also change the variables names from books to items, author too key and value
        //Signature is the parameters of the function
        //fn stands for function and its the standard
        //array_filter is the prebuilt PHP function

        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andy Weir';
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>