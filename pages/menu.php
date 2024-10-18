<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="main">
            <p>MENU</p>
        </div>
        <div class="drinks">
            <div class="coffee">
                <div class="iconName1">
                    <h1>COFFEE</h1>
                    <img src="../src/img/general/coffee.svg" alt="coffee">
                </div>
                <?php
                    $coffeeFile= fopen("../src/menu-coffee.txt","r");
                    while (! feof($coffeeFile)) {
                        $coffeeLine = fgets($coffeeFile);
                        echo "<p>" . $coffeeLine . "</p>";
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
                        echo "<p>" . $cdrinkLine . "</p>";
                    }
                    fclose($cdrinkFile);
                ?>
            </div>         
        </div>
    </div>
</body>
</html> 