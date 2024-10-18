<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
    <div class="Menu">
        <div>Menu
            <img src="../src/img/general/Rectangle 1.png" alt="background">
        </div>
        <div class="drinks">
            <div class="coffee">
                <div class="iconName1">
                    <p>COFFEE</p>
                    <img src="../src/img/general/coffee.svg" alt="coffee">
                </div>
                <?php
                    $coffeeFile= fopen("../src/menu-coffee.txt","r");
                    while (! feof($coffeeFile)) {
                        $coffeeLine = fgets($coffeeFile);
                        echo $coffeeLine. "<br>";
                    }
                    fclose($coffeeFile);
                ?>
            </div>   
            <div class="cdrink">
                <div class="iconName2">
                    <p>COLD DRINKS & TEA</p>
                    <img src="../src/img/general/cold drinks.svg" alt="Cold">
                </div>
                <?php
                    $cdrinkFile= fopen("../src/menu-cdrink.txt","r");
                    while (! feof($cdrinkFile)) {
                        $cdrinkLine = fgets($cdrinkFile);
                        echo $cdrinkLine. "<br>";
                    }
                    fclose($cdrinkFile);
                ?>
            </div>         
        </div>
    </div>
</body>
</html> 