<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/contact.css" type="text/css">
</head>
<body>
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
    <main>
        <div class="contact">
            <h1>Want to contact us?</h1>
            <div class="info">
                <p>Address: Raadhuisstraat 6, 1012 TJ</p>
                <p>Place: Amsterdam</p>
                <p>Telephone number: +31 (0)619653239</p>
                <p>Email: ouicafe@gmail.com</p>
                <p>Pets are allowed</p>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <textarea name="fname" id="fname">Name:</textarea>
                <textarea name="email" id="email">Email:</textarea>
                <textarea name="mess" id="mess">Message:</textarea>
                <input type="submit" value="Send" id="button">
            </form>
            <div class="openHour">
                <h3>Opening hours:</h3>
                <p>Mon - Sun   7:00 - 18:00</p>
                <h3>Special holiday closing time:</h3>
                <p>New Year, Christmas</p>
            </div>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d512.0692914944498!2d4.889193667719619!3d52.3735789991982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60987110b2ba5%3A0x24c35a3fb3e222c!2sGAYO%20restaurant%20en%20bar!5e0!3m2!1sen!2snl!4v1729858567272!5m2!1sen!2snl" width="650" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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