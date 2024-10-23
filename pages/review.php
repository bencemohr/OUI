<?php
$error = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Sanitize incoming data */
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $occ = filter_input(INPUT_POST, "occ", FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    /* Checking incoming data for error - No message given. If no name is present replace with anonymus */
    if ($msg != "") {
        if ($name == "") {
            $name = "Anonymus";
            output($name, $occ, $msg);
        } else {
            output($name, $occ, $msg);
        }
    } else {
        $error = TRUE;
    }
}

/* Echoes the error message to the html */
function error($error)
{
    if ($error) {
        echo '
        <div id="error-msg">
            <h4>Message cannot be empty!</h4>
        </div>
        ';
    }
}

/* Put the ready data into the CSV file */

function output($name, $occ, $msg)
{
    $out = fopen("../src/reviews.csv", "a");
    fwrite($out, "\n");
    fputcsv($out, [$name, $occ, $msg], ",", '"', "", "");
    fclose($out);
}
class Card
{
    private $name;
    private $occ;
    private $msg;
    private $color;
    private $stars;
    private $picture_url;
    function __construct($color, $name, $occ, $msg, $stars=2.5, $picture_url='../src/img/review/men-picture.png')
    {
        $this->color = $color;
        $this->name = $name;
        $this->occ = $occ;
        $this->msg = $msg;
        $this->stars = $stars;
        $this->picture_url = $picture_url;
        $this->Build();
    }
    function Build()
    {
        echo "
            <div class='$this->color'>
            <img src=$this->picture_url alt='logo' class='picture'>
            <p class='name'>$this->name</p>
            <p class='who'>$this->occ</p>
            <div class='stars'>
        ";
            $this->get_stars();
        echo "
            </div>
            <p class='review'>$this->msg</p></div>
        ";
    }
    function get_stars()
    {
        if (is_float($this->stars)) {
            for ($i = 0; $i < intval($this->stars); $i++) {
                echo '<img src="../src/img/review/star-full.svg" alt="full-star">';
            }
            echo '<img src="../src/img/review/star-half.svg" alt="half-star">';
            for ($i = 0; $i < 4 - intval($this->stars); $i++) {
                echo '<img src="../src/img/review/star-zero.svg" alt="zero-star">';
            }
        } else {
            for ($i = 0; $i < $this->stars; $i++) {
                echo '<img src="../src/img/review/star-full.svg" alt="full-star">';
            }
            for ($i = 0; $i < 4 - $this->stars; $i++) {
                echo '<img src="../src/img/review/star-zero.svg" alt="zero-star">';
            }
        }
    }
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
            <?php
            $file = fopen("../src/reviews.csv", "r");
            $colors = ['card-brown', 'card-light', 'card-green', 'card-purple', 'card-red'];
            $i = 0;
            while (!feof($file)) {
                if ($i == 5) {
                    $i = 0;
                }
                $line = fgetcsv($file);
                $name = $line[0];
                $occ = $line[1];
                $msg = $line[2];
                new Card($colors[$i], $name, $occ, $msg);
                $i++;
            }
            fclose($file);
            ?>
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