<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
    
    <main>
        <div class="container">
            <header>
                <img src="../src/img/general/logo.svg" alt="logo">
                    <nav>
                        <ul>
                            <?php
                                $menuNav= array("HOME","WELCOME","MENU","OUR STORY","REVIEW","CONTACT");
                                $link= array("","","","","","");
                                for ($i=0; $i < count($menuNav); $i++) {
                                    echo "<li><a href='".$link[$i]."'>".$menuNav[$i]."</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                    <div class="socialMedia">
                        <img src="../src/img/general/facebook.svg" alt="facebook">
                        <img src="../src/img/general/instagram.svg" alt="instagram">
                </div>
                </header>
                
                <div class="menu">
                    <h1>MENU</h1>
                </div>
            <div class="drinks">
                <h1>DRINKS</h1>
                <div class="coffee">
                    <div class="icon">
                        <h2>COFFEE</h2>
                        <img src="../src/img/general/coffee.svg" alt="coffee">
                    </div>
                    <div class="coffeeItem">
                        <?php
                            $coffeeFile= fopen("../src/menu-coffee.txt","r");
                            while (! feof($coffeeFile)) {
                                $coffeeLine = fgets($coffeeFile);
                                echo "<p>" . $coffeeLine . "</p>";
                            }
                            fclose($coffeeFile);
                        
                        ?>
                    </div>
                </div>   
                <div class="cdrink">
                    <div class="icon">
                        <h2>COLD DRINKS & TEA</h2>
                        <img src="../src/img/general/cold drinks.svg" alt="Cold">
                    </div>
                    <div class="cdrinkItem">
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
        </div>
            
    </main>
</body>
</html> 