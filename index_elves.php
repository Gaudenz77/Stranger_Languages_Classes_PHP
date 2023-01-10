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
    <!-- <script src="./js/main.js" defer></script> -->
    <!-- <script src="./js/confirmation.js"></script> -->
    <title>Stranger Tongues - Language Classes/Elvspeak</title>
    <style>
      body {
        margin-top:18%;
        background: url('../assets/img/wp1947157-rivendell-wallpapers.jpg');
        width: 100%;
        height: auto;
        background-size:cover;
        background-repeat: no-repeat;
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>
    </head>
    <body>
  <main>

  <section>
    <header id="headerWrapper2" class="p-2 bg-dark text-bg-light">
      <div  class="container">
        <div class="row m-3">

            <div class="col m-1 p-2 title-font-header contenthead2">
              <h1 class="glow" style="text-align:left">Stranger Tongues&#8482;</h1>
              <p id="titlelead2" style="text-align:left;">Stranger Tongues&#8482; - strange language-classes for special people!<span style="float:right; font-size:x-large;">Welcome yalls!</span></p>
            </div>
          </div>
     
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-auto">
                  <li><a href="index_elves.php" class="nav-link px-2 text-white">Homepage</a></li>
                  <li><a href="index.php" class="nav-link px-2 text-white">Klingon</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                </ul>
       
          <div class="text-end">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a href="index.php" type="button" class="btn btn-warning">Klingon</a>
              <a href="index_elves.php" type="button" class="btn btn-success">Elvspeak</a>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>

  <section>
    <div class="container content2">
      <div class="row">
        <div class="col-sm">

          <img class="rounded-circle img-fluid"  src="./assets/img/Elrond_cut.png" alt="test" id="klingon_02">
          
          <div class="text-center">
            <div class="container">
              <div class="row">
                <div class="col-sm m-5 p-5"></div>
              </div>
            </div>
            <h1 class="display-3 title-font-content">Learn Elvspeak Now!</h1>
            <p class="lead" style="text-align: left;  padding-left: 2%;">
              Stranger Tongues&#8482; is the one and only language institute,
              where we teach the fine tunings and techniques to have in evry elvish palaver the upper hand. Fill out the following form to register for new classes next semester.
            </p>
            
            </div>
        </div>
        <div class="filler"></div>

        <div class="col-sm px-5" style="height:max-content;">
          <p class="title-font-lead">Fill out the following form<br>- and recheck your entries</p>
             <!-- <form id="formValidation" onsubmit="return validateAll();" action="./results.html"  method="get"> -->
<!-- FORM START - FORM START - FORM START - FORM START - FORM START - FORM START - FORM START - FORM START - FORM START -FORM START - FORM START - FORM START - -->
<?php
// define variables and set to empty values
  $emailErr = $genderErr = $fNameErr = $lNameErr = $ageErr = $phoneErr = $levelErr = $commentaryErr = "";
  $email = $gender = $fName = $lName = $age = $phone = $level = $commentary = "";
  $valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (empty($_POST["email"])) {
    $valid=false;
    $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
} // if input "text" then "else" necessary if "email" not necessary, field say "invalid" format is alerted.

if (empty($_POST["gender"])) {
  $valid=false;
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
    
if (empty($_POST["fName"])) {
  $valid=false;
  $fNameErr = "First Name is required";
} else {
  $fName = test_input($_POST["fName"]);
}

if (empty($_POST["lName"])) {
  $valid=false;
  $lNameErr = "Last Name is required";
} else {
  $lName = test_input($_POST["lName"]);
}

if (empty($_POST["age"])) {
  $valid=false;
  $ageErr = "Age is required";
} else {
  $age = test_input($_POST["age"]);
}

if (empty($_POST["phone"])) {
  $valid=false;
  $phoneErr = "Phone-No. is required";
} else {
  $phone = test_input($_POST["phone"]);
}

if (empty($_POST["level"])) {
  $valid=false;
  $levelErr = "Level is required";
} else {
  $level = test_input($_POST["level"]);
}

if (empty($_POST["commentary"])) {
  $valid=false;
  $commentaryErr = "Please enter a commentary";
} else {
  $commentary = test_input($_POST["commentary"]);
}

if($valid){
  require('confirmation.php');
  exit();
}

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
          
          <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- method="post" onsubmit="return validateAll();"> -->
                    <!-- <form action="confirmation.php" method="post" onsubmit="return validateAll();">  --> 
                        <!-- <div id="errormessage"></div> -->
        
                        <label for="valMail" class="form-label" style="margin-top: 20px;">E-mail adress:</label>
                          <!-- <p id="message-1" class="messageError"></p> -->
                          <span class="error">* <?php echo $emailErr;?></span><br>
                          <div class="mb-4 input-group">
                            <span class="input-group-text">
                              <i class="bi bi-envelope-at-fill"></i></span>
                            <input type="email" class="form-control text-white bg-dark" name="email" id="valMail" value="<?php echo $email;?>" placeholder="e.g me@expl.com">
                            <div class="input-group-text"  style="font-size: 80%"><label for="newsletter">Sub to Newsletter?</label>
                              <input class="form-check-input mt-0 mx-1" name="newsletter" id="newsletter" type="checkbox" value="" aria-label="Checkbox for following text input"></div>
                            </div>
        
                        <label for="valGender" class="form-label">Gender</label>
                        <!-- <p id="message-2" class="messageError"></p> -->
                        <span class="error">* <?php echo $genderErr;?></span><br>
                        <div class="mb-4 input-group">
                          <span class="input-group-text">
                            <i class="fa-solid fa-mars-and-venus-burst"></i>
                          </span>
                              <select class="form-select text-white bg-dark" id="valGender" name="gender">
                              <option value="" selected>-- Please choose an option --</option>
                              <?php
                                // while loop generation of animal names
                                $gender = array("Male", "Female", "Binary");
                                $i = 0;
                                $length = count($gender);

                                while ($i < $length) {
                                    $g = $gender[$i]; 
                                    // echo '<option value="' . $m . '">'  . $m .  '</option>';
                                    // mit string template shorter and easier format ("")
                                    echo "<option value='$g'>$g</option>";
                                    $i++; // long form: $i = $i +1
                                }
                            ?>



                              
                              </select>
                          </div>
        
                            <label for="fName" class="form-label">First Name</label>
                            <!-- <p id="message-3" class="messageError"></p> -->
                            <span class="error">* <?php echo $fNameErr;?></span><br>
                            <div class="mb-4 input-group">
                              <span class="input-group-text">
                                <i class="fa-solid fa-circle-user"></i>
                              </span>
                              <input type="text" class="form-control text-white bg-dark" id="fName" name="fName" value="<?php echo $fName;?>" placeholder="e.g Gaudenz" >
                            </div>
                            
                          <label for="lName" class="form-label">Last Name</label>
                          <!-- <p id="message-4" class="messageError"></p> -->
                          <span class="error">* <?php echo $lNameErr;?></span><br>
                            <div class="mb-4 input-group">
                              <span class="input-group-text">
                                <i class="fa-solid fa-circle-user"></i>
                              </span>
                              <input type="text" class="form-control text-white bg-dark" id="lName" name="lName" value="<?php echo $lName;?>" placeholder="e.g Raiber" >
                            </div>
        
                            <label for="valAge" class="form-label">Your Age</label>
                            <!-- <p id="message-5" class="messageError"></p> -->
                            <span class="error">* <?php echo $ageErr;?></span><br>
                            <div class="mb-4 input-group">
                              <span class="input-group-text">
                                <i class="fa-solid fa-circle-user"></i>
                              </span>
                              <input type="number" class="form-control text-white bg-dark" id="valAge" name="age" value="<?php echo $age;?>" placeholder="18 to 99"><!-- min="0" max="150" -->
                            </div>                                                                                               
                          </div>


          <div class="col-sm mt-5 mb-4 px-5">
          <label for="telNumber" class="form-label" style="margin-top: 25px;">Enter your phone number:</label>
          <!-- <p id="message-6" class="messageError"></p> -->
          <span class="error">* <?php echo $phoneErr;?></span><br>
          <div class="mb-4 input-group">
            <span class="input-group-text">
              <i class="fa-solid fa-phone-volume"></i>
              </span>
            <input type="tel" class="form-control text-white bg-dark" id="telNumber" name="phone" value="<?php echo $phone;?>" placeholder="e.g 41-78-123-45-67" >
          </div>
  
          <!-- <p>pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" format="+41781234567"</p> -->

          <label for="classLevel" class="form-label">Class Level</label>
          <!-- <p id="message-7" class="messageError"></p> -->
          <span class="error">* <?php echo $levelErr;?></span><br>
            <div class="mb-4 input-group">
                  <span class="input-group-text">
                  <i class="fa-solid fa-graduation-cap"></i></span>
                  <select class="form-select text-white bg-dark" name="level" id="classLevel">
                  <option value="" selected>-- Please choose a level --</option>
                            <?php
                                // while loop generation of animal names
                                $level = array("Beginner A0", "Advanced Degree B1", "Master Degree C3");
                                $i = 0;
                                $length = count($level);

                                while ($i < $length) {
                                    $l = $level[$i]; 
                                    // echo '<option value="' . $m . '">'  . $m .  '</option>';
                                    // mit string template shorter and easier format ("")
                                    echo "<option value='$l'>$l</option>";
                                    $i++; // long form: $i = $i +1
                                }
                            ?>
                </select>
            </div>
            <div class="form-floating mb-4 mt-5">
              <textarea name="commentary" id="myComment" class="form-control text-white bg-dark" style="height: 140px" name="commentary"></textarea><p class="error">*<?php echo $commentaryErr;?></p>
              <label for="query" input type="text" style="color:white; margin-top:0.1%"><i class="fa-solid fa-message"></i> additional commentary*...</label>
              </div> 
              <!-- hidden input -->
              <input type="hidden" id="myHidden" name="custId" value="Elvespeak">

            <div class="mb-4 text-center">    
              <input type="submit" class="btn btn-success" value="Submit">
              <!-- <button type="submit" class="btn btn-secondary" value="register">submit</button> --></div>
            </form>
<!-- FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - FORM END - -->

            <!-- <div class="mb-4 text-center">
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div> -->
    
            <div><div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>DISCLAIMER</strong> Follow this link for cookie policy
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div></div>
            <div><a href="#" class="nav-link px-2 text-white text-end">back to top</a></div>
          </div>
        </div>


      </div>
    </div>
  </section>

    <section id="footer2">
      <footer>
        <div class="container-fluid my-2 py-2">
          <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-auto">
            <li><a href="index.php" class="nav-link px-2 text-white">Homepage</a></li>
            <li><a href="index_elves.php" class="nav-link px-2 text-white">Learn Elvspeak</a></li>
            <li><a href="index.php" class="nav-link px-2 text-white">Learn Klingon</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white"><?php echo  "© " . date("Y/m/d") ." &#129322; " ?></a></li>
          </ul>
        </div>
      </footer>
    </section>

  </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>