<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
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
      
      
      <header>
      <div class="logo">
        <a href="file:///C:/University/Web%20Development/NHL_Stenden_PHP_Docker_Env-0.4/app/public/Oui/OUI/index.html#" target="_self"><img src="src/img/general/logo.svg"></a>
      </div>
        <nav>
          
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Welcome</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Our story</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">Contact</a></li>
          </ul>

        </nav>

        <div class="social-media">
          <a href="#"><img src="src/img/general/facebook.svg"></a>
          <a href="#"><img src="src/img/general/instagram.svg"></a>
        </div>
      </header>
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

        
    
</body>
</html>