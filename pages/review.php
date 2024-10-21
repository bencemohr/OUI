<?php
$error=FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    /* Sanitize incoming data */
    $name=filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
    $occ=filter_input(INPUT_POST,"occ",FILTER_SANITIZE_SPECIAL_CHARS);
    $msg=filter_input(INPUT_POST,"msg",FILTER_SANITIZE_SPECIAL_CHARS);

    /* Checking incoming data for error - No message given. If no name is present replace with anonymus */
    if ($msg!= "")
    {
        if ($name=="")
        {
            $name="Anonymus";
            output($name,$occ,$msg);
        }
        else
        {
            output($name,$occ,$msg);
        }
    }
    else
    {
        $error=TRUE;
    }
}

/* Echoes the error message to the html */
function error($error)
{
    if ($error)
    {
    echo '
        <div id="error-msg">
            <h4>Message cannot be empty!</h4>
        </div>
        ';
    }
}

/* Put the ready data into the CSV file */

function output($name,$occ,$msg)
{
    $out=fopen("../src/reviews.csv","a");
    fputcsv($out,[$name,$occ,$msg]);
    fclose($out);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Team IT1F">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUI</title>
    <link rel="stylesheet" href="../styles/normalise.css" text="type/css">
    <link rel="stylesheet" href="../styles/general.css" type="text/css">
    <link rel="stylesheet" href="../styles/review.css" type="text/css">
</head>
<body>
    <main>
        <nav></nav>
        <h1>Customer Reviews</h1>
        <section id="cards"> 
            <div class="card-brown">
                <img src="../src/img/review/men-picture.png" alt="logo" class="picture">
                <p class="name">Tyler</p>
                <p class="who">Student</p>
                <div class="stars"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"></div>
                <p class="review">“I love spending my downtime in a cozy coffee shop, surrounded by the sweet aroma of freshly brewed drinks and pastries.”</p>
            </div>
            <div class="card-light">
                <img src="../src/img/review/men-picture.png" alt="logo" class="picture">
                <p class="name">Tyler</p>
                <p class="who">Student</p>
                <div class="stars"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"></div>
                <p class="review">“I love spending my downtime in a cozy coffee shop, surrounded by the sweet aroma of freshly brewed drinks and pastries.”</p>
            </div>
            <div class="card-green">
                <img src="../src/img/review/men-picture.png" alt="logo" class="picture">
                <p class="name">Tyler</p>
                <p class="who">Student</p>
                <div class="stars"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-zero.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"></div>
                <p class="review">“I love spending my downtime in a cozy coffee shop, surrounded by the sweet aroma of freshly brewed drinks and pastries.”</p>
            </div>
            <div class="card-purple">
                <img src="../src/img/review/men-picture.png" alt="logo" class="picture">
                <p class="name">Tyler</p>
                <p class="who">Student</p>
                 <div class="stars"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"></div>
                <p class="review">“I love spending my downtime in a cozy coffee shop, surrounded by the sweet aroma of freshly brewed drinks and pastries.”</p>
            </div>
            <div class="card-red">
                <img src="../src/img/review/men-picture.png" alt="logo" class="picture">
                <p class="name">Tyler</p>
                <p class="who">Student</p>
                 <div class="stars"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"><img src="../src/img/review/star-full.svg" alt="full-star"></div>
                <p class="review">“I love spending my downtime in a cozy coffee shop, surrounded by the sweet aroma of freshly brewed drinks and pastries.”</p>
            </div>
        </section>
        <!-- Bence Mohr -->
         <section id="form">
            <h2>Leave a review yourself</h2>
            <?php error($error) ?>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="name" id="name" placeholder="Your Name">
                <input type="text" name="occ" id="occ" placeholder="Your Occupation">
                <textarea name="msg" id="msg" rows="5" cols="40" placeholder="Tell us what you think"></textarea>
                <input type="submit" value="Submit my review">
                <!-- Discussion about stars rating and realization -->
            </form>
         </section>
    </main>
</body>
</html>