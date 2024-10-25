<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Team IT1F">
    <link rel="stylesheet" href="../styles/menu-desserts.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../styles/menu-drinks.css" type="text/css">
    <link rel="stylesheet" href="../styles/nav_bar.css" type="text/css">
    <link rel="stylesheet" href="../styles/footer.css" type="text/css">
    <link rel="stylesheet" href="../styles/general.css" type="text/css">
</head>
<body>
    <?php
        $current_page = 'menu'; //name of your page
        include '../src/nav.php';
    ?>
    <main>
        <div class="container-drinks">
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
                            $i=2;
                            $coffeeFile= fopen("../src/menu-coffee.txt","r");
                            while ($i != feof($coffeeFile)) {
                                $coffeeLine = fgets($coffeeFile);
                                if($i % 2 != 0)
                                {
                                    echo "<p>" . $coffeeLine . "</p>";
                                    $i+=1;
                                }
                                else
                                {
                                    echo "<b><p>" . $coffeeLine . "</p></b>";
                                    $i+=1;
                                }
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
                            while ($i != feof($cdrinkFile)) {
                                $cdrinkLine = fgets($cdrinkFile);
                                if($i % 2 != 0)
                                {  
                                    echo "<p>" . $cdrinkLine . "</p>";
                                    $i+=1;
                                }
                                else
                                {
                                    echo "<b><p>" . $cdrinkLine . "</p></b>";
                                    $i+=1;
                                }
                            }
                            fclose($cdrinkFile);
                        ?>
                    </div>
                </div>         
            </div>
        </div>
    </main>
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
    <footer>
        <div class="footerLeft">Copyright &copy; 2025 OUI | All Rights Reserved</div>
        <div class="footerRight">
            <div class="pageInfo">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Pricing</a>
                <a href="">Contact</a>
                </div>
            <div class="social">
                <img src="../src/img/contact/Facebook.svg" alt="facebook">
                <img src="../src/img/contact/Twitter.svg" alt="twitter">
                <img src="../src/img/contact/Instagram.svg" alt="instagram">
                <img src="../src/img/contact/LinkedIn.svg" alt="linkedin">
                <img src="../src/img/contact/YouTube.svg" alt="youtube">
            </div>
        </div>
    </footer>

</body>
</html> 
