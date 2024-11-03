<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OUI Caffé</title>
    <link rel="icon" type="image/x-icon" href="src/img/general/logo.svg">
    <link rel="stylesheet" href="styles/index.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="styles/general.css" type="text/css">
    <link rel="stylesheet" href="styles/footer.css" type="text/css">
    <link rel="stylesheet" href="styles/nav_bar.css" type="text/css">
    <link rel="stylesheet" href="styles/scroll_bar.css" type="text/css">
  </head>
  <body>
    <div class="containter-2">
      <div class="Text">
        <h2>Start your <?php echo date("l"); ?> with a cup<Br>
        of coffee at OUI</h2>
      </div>
      <div class="TextParagraph">
        <p>
          Whether the weather is warm or <br />
          cold you can enjoy the coffee in hot <br />
          and cold brew.
        </p>
      </div>
      
      <div class="button-container">
          <a href="#" class="menu-button">MENU</a>
      </div>
    </div>   
    <main>
    <?php
        $current_page = 'home'; //name of your page
        include 'src/nav.php';
    ?>      
      <hr>
      <div class="container">

        <div class="container1">
          <img src="src/img/general/Image.png" alt="Image" id="img">
        </div>

        <div class="container2">
          <h2>Overpriced coffee got you dragging?</h2>
          <p>It might be time to reconsider where you're spending your caffeine euros.</p>
        </div>

        <div class="container3">
          <div class="message1">
           <p id="message">
           
           <?php
           $messages = ['We are opened at: 7:00', 'We are closed at: 18:00'];
           echo $messages[0]; 
           ?>
           </p>

           <script>
             const messages= [
             <?php
              
             foreach ($messages as $message) {
             echo "'" . $message . "',";
             }
             ?>
             ];

             let currentIndex = 0;
 
             function updateMessage() {
              
             const messageElement = document.getElementById('message');

             messageElement.textContent = messages[currentIndex];

             currentIndex = (currentIndex + 1) % messages.length;
             }

              setInterval(updateMessage, 1500);
            </script>
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
            <a href="https://www.facebook.com/">
                    <img src="src/img/contact/Facebook.svg" alt="facebook">
                </a>
                <a href="https://x.com/">
                    <img src="src/img/contact/Twitter.svg" alt="twitter">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="src/img/contact/Instagram.svg" alt="instagram">
                </a>
                <a href="https://www.linkedin.com/">
                    <img src="src/img/contact/LinkedIn.svg" alt="linkedin">
                </a>
                <a href="https://www.youtube.com/">
                    <img src="src/img/contact/YouTube.svg" alt="youtube">
                </a>

            </div>
        </div>
    </footer>

    
</body>
</html>