<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OUI</title>
    <link rel="stylesheet" href="../styles/general.css" type="text/css">
    <link rel="stylesheet" href="../styles/normalise.css" type="text/css">
    <link rel="stylesheet" href="../styles/welcome.css" type="text/css">
    <link rel="stylesheet" href="../styles/nav_bar.css" type="text/css">
    <link rel="stylesheet" href="../styles/footer.css" type="text/css">

    <!--
    Author: Bence Mohr
    Date: 2024. Oct. 23.

    -->
</head>
<body>
    <?php
        $current_page = 'welcome'; //name of your page
        include '../src/nav.php'; 
    ?>

    <div class="main">
        <div class="approach">
            <h2>Our Approach</h2>
            <p>At Oui, we believe a café is more than just a place for
                coffee – it's a sanctuary blending tradition, 
               community, and craftsmanship. Our approach is
                rooted in French café culture, using only the finest 
               ingredients, from locally sourced produce to premium 
               French butter and flour. Every pastry is handmade 
               daily by skilled pâtissiers, following traditional 
               techniques. We collaborate with artisanal roasters to 
               ensure each coffee is rich and flavorful, while our 
               baristas blend tradition with expertise. Whether you're 
               here for breakfast, a break, or a quiet moment, we 
               invite you to savor the essence of French café culture 
               with us.</p>
        </div>
        <img src="../src/img/welcome/coffemachine.svg" alt="abstact coffe machine with coffe beans around it" id="welcomeimg">
    </div>
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