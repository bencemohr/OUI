<?php
$error = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Sanitize incoming data */
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $occ = filter_input(INPUT_POST, "occ", FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);
    $stars = $_POST['rating'] ?? '5';
    $gender = $_POST['gender'] ?? '2';

    /* Checking incoming data for error - No message given. If no name is present replace with anonymus */
    if ($msg != "") {
        if ($name == "") {
            $name = "Anonymus";
            output($name, $occ, $msg, $stars, $gender);
        } else {
            output($name, $occ, $msg, $stars, $gender);
        }
    } else {
        $error = TRUE;
    }
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
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

function output($name, $occ, $msg, $stars, $gender)
{
    $out = fopen("../src/reviews.csv", "a");
    fwrite($out, "\n");
    fputcsv($out, [$name, $occ, $msg, $stars, $gender], ",", '"', "", "");
    fclose($out);
}
class Card
{
    private $name;
    private $occ;
    private $msg;
    private $color;
    private $stars;
    private $gender;
    private $pictures_url = ['..\src\img\review\profile-pictures\men.png', '..\src\img\review\profile-pictures\women.png', '..\src\img\review\profile-pictures\anonym.jpg'];
    function __construct($color, $name, $occ, $msg, $stars, $gender)
    {
        $this->color = $color;
        $this->name = $name;
        $this->occ = $occ;
        $this->msg = $msg;
        $this->stars = $stars;
        $this->gender = $gender;
        $this->Build();
    }
    function Build()
    {
        echo "
            <div class='$this->color'>
            <img src=";
            $this->get_gender_picture();
            echo " alt='$this->name' class='picture'>
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
    function get_gender_picture(){
        echo $this->pictures_url[$this->gender];
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
            for ($i = 0; $i < 5 - $this->stars; $i++) {
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
            if ($i == 5) {
                $i = 0;
            }
            $line = fgetcsv($file);
            $name = $line[0];
            $occ = $line[1];
            $msg = $line[2];
            $stars = $line[3];
            $gender = $line[4];
            new Card($colors[$i], $name, $occ, $msg, $stars, $gender);
            $i++;
        
            
            fclose($file);
            ?>
        </section>

        <section id="form">
            <h2>Leave a review yourself</h2>
            <?php error($error) ?>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="name" id="name" placeholder="Your Name">
                <input type="text" name="occ" id="occ" placeholder="Your Occupation">
                <textarea name="msg" id="msg" rows="5" cols="40" placeholder="Tell us what you think"></textarea>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="5"></label>
                    
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="4"></label>

                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="3"></label>

                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="2"></label>

                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="1"></label>
                </div>
                <div class="gender-selection">
                    <input type="radio" id="male" name="gender" value="0" />
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="1" />
                    <label for="female">Female</label>
                </div>
                <input type="submit" value="Submit my review" id="submit_but">



            </form>
        </section>
    </main>
</body>

</html>