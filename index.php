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
   </h1> 
</body>
</html>