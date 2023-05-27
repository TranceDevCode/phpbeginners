<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
   <h1>
        <?php   
            $greeting = "Hello";
            echo "$greeting everybody!";
        ?>

        <!-- Variables -->
        <?php 
            $name = "Dark Matter";
            $read = true;
        ?>

        <!-- Condicionales -->
        <h1>
            <?php 
                if($read == true) {
                   echo "You have read " . $name;
                }else {
                   echo "You have Not read " . $name;
                }
            ?>
        </h1>

        <!-- Arrays -->
        <h1>Recomended books</h1>
        <?php
            $books = [
                "The Lord Of The Rings",
                "Batman",
                "Flash Paradoja del tiempo",
            ];
        ?>
        <ul>
            <?php foreach($books as $book) {
                echo "<li>$book</li>";
                }                 
            ?>
        </ul>

        <!-- Associative Arrays -->
        <h1>Associative Arrays</h1>
        <?php
            $booksTwo = [
                [
                    'name' => "The Lord Of The Rings",
                    'author' => "John",
                    'purchaseUrl' => "http://www.example.com",
                ],
                [
                    'name' => "Batman",
                    'author' => "Bruce Wayne",
                    'purchaseUrl' => "http://www.example.com",
                ]
            ];
        ?>

        <ul>
            <?php foreach($booksTwo as $libro) : ?>
                <li>
                    <a href="<?php $libro['purchaseUrl'] ?>">
                        <?= $libro['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

       
   </h1> 
</body>
</html>