<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <!-- <script src="./js/confirmation.js"></script> -->
    <style>
        body {
            background-size:auto;
        }
    </style>
    <title>Document</title>
</head>
<body>
   
        <div class="container">
           <div class="row">
            <div class="col-sm">
                <h1 id="app" style="color:rgb(83, 7, 27)">Thank you for your registration. Your input values are the following:</h1>
                <div class="alert alert-warning" role="alert">
                <p class="mt-5">
                <?php prettyPrint($_POST); ?>

                    
<?php prettyPrint($_POST); ?>

<?php  print_r($_POST); ?>
<br>

    Welcome <?php echo $_POST["fName"]; ?>!<br>

    Your E-mail-address is: <?php echo $_POST["email"]; ?><br>
    Want newsletter?: <?php //echo $_POST["newsletter"]; ?><br>
    Your Gender is: <?php echo $_POST["gender"]; ?><br>
    Your first name is: <?php echo $_POST["fName"]; ?><br>
    Your last name is: <?php echo $_POST["lName"]; ?><br>
    Your age is: <?php echo $_POST["age"]; ?><br>
    Your phone-no. is: <?php echo $_POST["phone"]; ?><br>
    Your student level is: <?php echo $_POST["level"]; ?><br>
    Your commentary is: <?php echo $_POST["commentary"]; ?><br>
    Your language chosen is: <?php echo $_POST["custId"]; ?><br>

<?php

/*
    Die ausgewählten Farbwerte herausfiltern und als einfache Liste 
    ausgeben.

    Für foreach siehe auch https://www.w3schools.com/php/php_looping_foreach.asp

    Wir verwenden die erweiterte Form von foreach ($_POST as $value) {},
    nämlich foreach ($_POST as $key => $value) {}.
  */


// feedback on mammal chosen
$gender = $_POST["gender"];
$level = $_POST["level"];

 //listi of mammals

/* if ($gender === "Male") {
    echo "manly";
}
elseif ($gender === "Female") {
    echo "something Horse ";
}

elseif ($gender === "Binary") {
    echo "binary";
}

else {
    // echo "everything else.."
} */


/* switch($gender) {
    case "Male": 
    echo "its a beefy thingy!.";
    break;

    case "Female": 
    echo "stop horsing around...";
    break;

    case "Binary": 
    echo "a goat is a goat of goat..";
    break;

    default:
    echo "Oh my humnan...";

} */

echo "<br>";

// find Fuck and change to better word ("strlen" same as "length" in JS)
if (strlen($_POST["commentary"]) > 0) {

// prepare varibles    
$commentary = $_POST["commentary"];
$needles = array("fuck", "Fuck", "fuCK", "asshole", "arschloch");
$replace = "%*##ç%%&**";

// change to lowercase letters
$commenntary = strtolower($commentary);

// replace to placeholder
$commentary = str_replace($needles, $replace, $commentary);
// echo "Your commentary:$commentary<br>";

// if more than 20 letters warning
if (strlen($_POST["commentary"]) > 20) {
echo "You used more than 20 letters! - Change that. And dont curse ffs!";
}

}
// Validate t f out of thius form!
?><br>







                </div>
            </div>
            
            <div class="col-sm">
            <h1 id="app" style="color:rgb(83, 7, 27)">We value your input always. For questions or ideas write to me <a href="mailto:gaudenzraiber@yahoo.de" style="font-size:90%;">@Krakatoom</a></h1>
                <a name="back" id="back" class="btn btn-warning text-white" href="/index.php" role="button">Back to Klingon homepage!</a>
                <a name="back" id="back" class="btn btn-success" href="/index_elves.php" role="button">Back to Elvspeak homepage!</a>
            </div>
        </div>
        

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>