<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="stylesheet" href="../styles/general.css" type="text/css">
    <link rel="stylesheet" href="../styles/philosophy.css" type="text/css">
    <link rel="stylesheet" href="../styles/scroll_bar.css" type="text/css">
    <link rel="stylesheet" href="../styles/nav_bar.css" type="text/css">

    
</head>
<body>
    <?php
            $current_page = 'about'; //name of your page
            include '../src/nav.php'; 
    ?>
    <main>
        <div class="container">
            <div class="text">
                <h2><b>Our Philosophy</b></h2>
                    <p>
                        Coffee was introduced to paris in 1644 by 
                        Pasqua Rosee, who opened the first cafe in 
                        Paris on place saint-Germain, but the concept
                        did not become successful until the opening of 
                        Cafe Procopr in about 1689 in rue des Fosses-
                        Saint-Germain, close to the Comedie-Francaise.
                    </p>
            </div>
            <div class="image">
               <img src="../src/img/building.jpg" alt="building">
            </div>
      
    </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="stylesheet" href="../styles/general.css" type="text/css">
    <link rel="stylesheet" href="../styles/philosophy.css" type="text/css">
    
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
        <div class="container">
            <div class="text">
                <h2><b>Our Philosophy</b></h2>
                    <p>
                        Coffee was introduced to paris in 1644 by 
                        Pasqua Rosee, who opened the first cafe in 
                        Paris on place saint-Germain, but the concept
                        did not become successful until the opening of 
                        Cafe Procopr in about 1689 in rue des Fosses-
                        Saint-Germain, close to the Comedie-Francaise.
                    </p>
            </div>
            <div class="philoImage">
               <img src="../src/img/building.jpg" alt="building">
            </div>
      
        </div>

        <div class="gallery">
            <h2>OUR GALLERY</h2>
            <svg width="80" height="60" viewBox="0 0 99 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M98.1822 25.717C98.5962 22.1173 98.4609 18.4756 97.7811 14.9165C96.8694 10.4277 94.3355 6.43234 90.6636 3.69411C86.9918 0.955886 82.4396 -0.333117 77.8773 0.0735012C74.2753 0.42903 70.7482 1.32903 67.4162 2.74277C60.6582 5.56633 54.1624 11.198 48.8239 18.3264C43.4853 25.4547 39.8903 33.2774 39.0726 40.5754C38.917 41.9221 38.8603 43.2784 38.9028 44.6333C38.9971 47.8806 39.8225 51.0648 41.3178 53.9489C42.813 56.8329 44.9394 59.3426 47.5389 61.2911C50.1383 63.2396 53.1438 64.5766 56.3315 65.2027C59.5192 65.8289 62.8071 65.7279 65.9504 64.9074C67.2809 64.5502 68.5852 64.1017 69.854 63.5651C76.6275 60.7415 83.1078 55.0944 88.4464 47.9661C93.7849 40.8377 97.3645 33.0151 98.1822 25.717Z" fill="#F8E4BE"/>
                <path d="M94.2788 10.1337C98.4293 18.7124 97.2566 28.7877 93.3839 37.2276C89.1588 46.6876 82.2002 54.6673 73.4029 60.1401C69.5704 62.488 65.1963 63.8061 60.7046 63.9665C69.4993 63.4419 77.2602 57.5017 82.9536 51.2065C89.6962 43.7542 95.3742 34.2343 96.2383 24.0046C96.7225 19.2905 96.0499 14.5293 94.2788 10.1337Z" fill="#54372B"/>
                <path d="M88.7705 10.0565L88.1996 10.5502C87.8293 10.8897 87.2893 11.3988 86.6567 12.0932C84.9775 14.0446 83.4311 16.1065 82.0279 18.2649C81.1484 19.5918 80.0683 20.9804 79.0963 22.4925C78.0959 24.0965 77.2832 25.8101 76.6739 27.5996C76.0522 29.5264 75.6637 31.5207 75.5167 33.5399C75.3316 35.6828 74.9336 37.8019 74.3286 39.8659C73.6665 41.9505 72.5849 43.8775 71.1502 45.5285C69.7357 47.0815 68.1868 48.5066 66.5214 49.7869C64.9785 51.0522 63.4355 52.1476 61.8926 53.1968C60.4905 54.1913 59.0382 55.1132 57.5415 55.9587C55.2859 57.2449 52.8527 58.1912 50.3206 58.7668C49.4103 58.9674 48.6851 59.06 48.1914 59.1371L47.4199 59.2143L48.176 59.0908C48.6697 58.9982 49.3949 58.8594 50.2898 58.6125C52.7487 57.9055 55.1001 56.8674 57.2793 55.5267C58.7411 54.6331 60.1524 53.6596 61.5069 52.6105C63.0498 51.5305 64.5927 50.3733 66.1357 49.1235C67.7162 47.8556 69.1872 46.4569 70.533 44.9422C71.8693 43.3649 72.8718 41.533 73.48 39.5573C74.0818 37.5435 74.4899 35.4769 74.699 33.3856C74.8644 31.2854 75.2841 29.213 75.9487 27.2139C76.6002 25.3741 77.487 23.6263 78.5871 22.0142C79.6363 20.4713 80.7164 19.1598 81.673 17.8483C83.1803 15.7488 84.8464 13.7681 86.6567 11.9234C87.3201 11.2754 87.8756 10.7971 88.1996 10.4731L88.7705 10.0565Z" fill="#54372B"/>
                <path d="M88.3848 7.86526C84.6818 10.7814 82.6605 14.3147 79.5284 18.1566C76.3652 21.7385 74.2323 26.1109 73.3566 30.8086C73.0978 33.6915 72.6129 36.5496 71.9063 39.3565C70.2245 44.4019 64.9168 47.7192 60.7509 50.9285C56.585 54.1378 52.3882 56.6373 47.1577 57.2545C50.6381 54.7304 53.8906 51.9063 56.8782 48.8146C59.8121 45.3109 61.9213 41.1927 63.0499 36.7644C64.2534 32.799 64.0528 28.4325 65.6883 24.5443C67.7404 19.6995 72.4001 16.3977 76.674 13.3427C80.4542 10.6734 83.756 8.40529 88.3848 7.86526Z" fill="#54372B"/>
                <path d="M22.0386 22.4306C18.409 22.7117 14.8442 23.5495 11.4695 24.9148C7.23789 26.6698 3.80323 29.9254 1.82426 34.057C-0.154701 38.1886 -0.538627 42.9054 0.746124 47.3027C1.78267 50.7654 3.34371 54.0488 5.37492 57.0386C9.46368 63.1331 16.1754 68.4254 24.2604 72.2827C32.3453 76.1401 40.6617 78.1613 47.9752 77.5595C49.3246 77.4427 50.6648 77.2366 51.9869 76.9424C55.1597 76.2291 58.1306 74.8087 60.6779 72.787C63.2252 70.7653 65.2831 68.1946 66.6982 65.2665C68.1133 62.3385 68.849 59.1287 68.8504 55.8767C68.8518 52.6246 68.1189 49.4142 66.7064 46.4849C66.1198 45.2476 65.4497 44.0516 64.7006 42.9053C60.6273 36.8108 53.9001 31.5339 45.7997 27.6766C37.6993 23.8193 29.3521 21.8135 22.0386 22.4306Z" fill="#F8E4BE"/>
                <path d="M7.48877 29.2504C15.0028 23.6033 24.9702 22.7392 33.9192 24.8222C44.1443 27.0974 53.4401 32.4177 60.581 40.0818C63.6079 43.3979 65.733 47.4355 66.7527 51.8081C64.5309 43.2757 57.2174 36.8108 49.9348 32.4443C41.3098 27.26 30.8487 23.5416 20.6191 24.7296C15.9441 25.1662 11.4416 26.7164 7.48877 29.2504Z" fill="#54372B"/>
                <path d="M8.47607 34.6816L9.07782 35.1445C9.47898 35.4376 10.0807 35.8697 10.8676 36.348C13.0956 37.6282 15.4046 38.7621 17.7799 39.7424C19.3229 40.3596 20.8658 41.1465 22.5013 41.8099C24.267 42.4838 26.1052 42.9499 27.9787 43.1986C29.9873 43.4454 32.0185 43.4454 34.027 43.1986C36.1666 42.99 38.3214 42.99 40.461 43.1986C42.6348 43.4433 44.7353 44.1313 46.6328 45.2198C48.4179 46.2835 50.1062 47.502 51.6781 48.8611C53.2211 50.1572 54.6097 51.515 55.9366 52.7802C57.1986 53.962 58.3985 55.2083 59.5316 56.5141C61.2297 58.4785 62.6283 60.683 63.6821 63.0561C64.0524 63.9201 64.2993 64.599 64.4536 65.0928L64.6696 65.8179L64.4073 65.0928C64.2222 64.6299 63.9444 63.951 63.5278 63.1332C62.3604 60.8499 60.8861 58.7371 59.1459 56.8535C58.0813 55.6809 56.8315 54.5083 55.4737 53.2739C54.1159 52.0396 52.6965 50.7435 51.169 49.4783C49.6142 48.1435 47.9468 46.9458 46.1853 45.8987C44.3796 44.8964 42.3911 44.2668 40.3376 44.0472C38.2595 43.8466 36.1669 43.8466 34.0887 44.0472C32.0391 44.2972 29.9667 44.2972 27.917 44.0472C25.9786 43.7901 24.0841 43.2711 22.2853 42.5043C20.5727 41.7636 19.076 40.9613 17.6565 40.2979C15.3017 39.2319 13.0366 37.9781 10.883 36.5485C10.1116 36.0239 9.5407 35.5611 9.15497 35.2525L8.47607 34.6816Z" fill="#54372B"/>
                <path d="M6.40869 35.4839C9.98829 38.5698 13.8302 39.8504 18.2121 42.1803C22.3331 44.588 27.033 45.8256 31.8053 45.7599C34.6854 45.4593 37.5845 45.3819 40.4766 45.5284C45.7534 46.2227 50.0273 50.7898 53.9927 54.246C57.958 57.7021 61.2136 61.3589 62.8182 66.358C59.6664 63.439 56.2698 60.796 52.6658 58.4582C48.6593 56.2542 44.209 54.9782 39.6434 54.7243C35.5084 54.3077 31.2653 55.3569 27.1457 54.4929C21.9923 53.4128 17.8881 49.4938 14.0308 45.8833C10.698 42.7203 7.82819 39.9122 6.40869 35.4839Z" fill="#54372B"/>
            </svg>
        </div>
        <div class="images">
            
            <img src="../src/img/Gallery/cafe-coffee-design-tasty1.png" class="img1">
            

           
            <img src="../src/img/Gallery/638fb1fb4bb6e 1.png" class="img2">
            

           
            <img src="../src/img/Gallery/still-life-scene-with-tea-cup-drinking.png" class="img3">
            

            
            <img src="../src/img/Gallery/1_aZRfmnz8r8_eaAuCYZGGHg 1.png" class="img4">
            

            
            <img src="../src/img/Gallery/WhatsApp Image 2024-10-07 at 11.46.13_5e71500b 1.png" class="img5">
            

            
            <img src="../src/img/Gallery/WhatsApp Image 2024-10-07 at 11.46.56_93360572 1.png" class="img6">
            

            
            <img src="../src/img/Gallery/WhatsApp Image 2024-10-07 at 11.54.48_60fa5dd8 1.png" class="img7">
            

            
            <img src="../src/img/Gallery/WhatsApp Image 2024-10-07 at 11.46.38_83827c3b 1.png" class="img8">
            
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