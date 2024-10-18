<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Team IT1F">
    <title>OUI</title>
    <link rel="stylesheet" href="../styles/menu-desserts.css" type="text/css">
</head>
<body>
    <main>
        <h1><b>DESSERT</b><img src="../src/img/Croissant.svg " alt="logo"></h1>
       
        <div class="container">
            <div class="containe">
                <?php
                    $file = fopen("../menuchange.txt", "r");

                    while(! feof($file))
                    {
                        $line = fgets($file);
                        echo "<p>" .$line. "</p>" ;
                    }
                ?>
            </div>

            <div class="contain">
                <?php
                    $file = fopen("../Macarons.txt", "r");

                    while(! feof($file))
                    {
                        $line = fgets($file);
                        echo "<p>" .$line. "</p>" ;
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>