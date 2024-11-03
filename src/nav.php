<?php 
echo "<nav>";
if ($current_page == 'home'){
    echo  "
    <a href='index.php'>
        <img src='src/img/general/logo.svg' alt='logo' id='logo'>
    </a>
    <ul>
        <li>
            <a href='pages/home.php'  id='now'>HOME</a>
        </li>
        <li>
            <a href='pages/welcome.php'>WELCOME</a>
        </li>
        <li>
            <a href='pages/menu.php'>MENU</a>
        </li>
        <li>
            <a href='pages/about.php'>OUR HISTORY</a>
        </li>
        <li>
            <a href='pages/review.php'>REVIEW</a>
        </li>
        <li>
            <a href='pages/contact.php'>CONTACT</a>
        </li>
    </ul>
    <div id='social'>
        <a href='https://www.facebook.com/'>
            <img src='src/img/general/facebook.svg' alt='facebook' id='faceb'>
        </a>
        <a href='https://www.instagram.com/'>
            <img src='src/img/general/instagram.svg' alt='instagram' id='insta'>
        </a>
    </div>
</nav>";
}else{
    echo "<a href='../index.php'><img src='../src/img/general/logo.svg' alt='logo' id='logo'></a>
    <ul><li><a href='home.php'";
    if ($current_page == 'home'){
        echo "id='now'";
    }
echo ">HOME</a></li>
        <li><a href='welcome.php'";
    if ($current_page == 'welcome'){
        echo "id='now'";
    }
echo ">WELCOME</a></li>
        <li><a href='menu.php'";
    if ($current_page == 'menu'){
        echo "id='now'";
    }
echo ">MENU</a></li>
        <li><a href='about.php'";
    if ($current_page == 'about'){
        echo "id='now'";
    }
echo ">OUR HISTORY</a></li> 
        <li><a href='review.php'";
    if ($current_page == 'review'){
        echo "id='now'";
    }
echo ">REVIEW</a></li> 
        <li><a href='contact.php'";
    if ($current_page == 'contact'){
        echo "id='now'";
    }
echo ">CONTACT</a></li>
    </ul>
    <div id='social'>
        <a href='https://www.facebook.com/'><img src='../src/img/general/facebook.svg' alt='facebook' id='faceb'></a>
        <a href='https://www.instagram.com/'><img src='../src/img/general/instagram.svg' alt='instagram' if='insta'></a>
    </div>
</nav>";
}
    
?>