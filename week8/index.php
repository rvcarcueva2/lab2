<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cel - UI / Ux Desinger</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="main.css">
</head>
<body>
    <img src="background1.png" style="background-size: cover; position: absolute; width: 100%; height: 100vh;">
    <img src="logo.png" alt="Logo" width="100px" style="position: relative; float: left; margin-left: 50px;" >
<div class="sidebar">
  <ul>
  <div class="Menulist">
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section1" >
              <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
              <div class="text">Home</div>
          </a>
      </li>
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section2" >
              <div class="icon"><ion-icon name="person-outline"></ion-icon></div>
              <div class="text">About Me</div>
          </a>
      </li>
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section3">
              <div class="icon"><ion-icon name="call-outline"></ion-icon> </div>
              <div class="text">Contacts</div>
          </a>
      </li>
      <li style="--bg: #C40BD5;" class="active">
        <a href="#section4">
            <div class="icon"><ion-icon name="code-outline"></ion-icon> </div>
            <div class="text">Contacts</div>
        </a>
    </li>
      
  </div>
  
  
  
  
  </ul>
  
  </div>
  
  </div>
<!-- Home Page -->
<div id="section1" class="container-fluid bg-dark " style="height: 100vh; padding: 20px">
    <img src="logo.png" alt="Logo" width="80px" >
    <img id="picture" src="picture1.png" alt="Profile" width="300px">
    <div class="container" style="width: 130vh; height: 70vh; position: absolute; left:400px; bottom: 7%;">
        <h1>I'm Cel</h1>
        <h2>UI/UX Desinger</h2>
        <p>I'm a student who aspires to be a freelancer in the field of UI/UX Design. I focus on</p>
        <p>crafting clean and user-friendly mobile app mockup designs. If you're a small</p>
        <p>business or an organization that seeks an audience, we can work things out.</p>
        <ul>
            <li>Uses <strong>Figma</strong> and <strong>Proto.io</strong> application mockups</li>
            <li>Uses <strong>diagrams.net</strong> for making flowcharts</li>
            <li>Uses <strong>Miro</strong> for task tracking</li>
        </ul>
        <button class="btn" onclick="scrollToSection('section2')">MORE ABOUT ME</button>

    </div>
  
  
</div>


<!-- Personal Infos -->
<div id="section2" class="container-fluid" style="height: 100vh; padding: 20px;">
    <h1>Personal Infos</h1>
  <pre style="position: absolute; line-height: 0; overflow: hidden; margin: 60px;">
      
       <p style="color: rgb(167, 165, 165);">First Name: <span style="color: white;"><strong> Reycel John Emmanuel</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Last Name: <span style="color: white;"><strong> Carcueva</strong></span></p>
       <p style="color: rgb(167, 165, 165);">Freelance: <span style="color: greenyellow;"><strong> Available</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Location: <span style="color: white;"><strong>Taguig, Metro Manila</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Nationality: <span style="color: white;"><strong>Filipino</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Language: <span style="color: white;"><strong>English, Filipino</strong></span></p>
    </p>
  </pre>
    <div id="video-container">
        <video id="background-video" autoplay muted loop><source src="video1.mp4" type="video/mp4">
    </div>
    
  

  <h2 style="position: absolute; top: 115%; left: 59%;">My Hobbies</h2>
  <div class="image-container">
    <img class="image-top"  src="picture2.png" alt="Image 1" >
    <img class="image-top-left" src="picture3.png" alt="Image 2">
    <img class="image-bottom" src="picture4.png" alt="Image 3">
    <img class="image-bottom-left"  src="picture5.png"  alt="Image 4" >
  </div>

    
  </div>
  
    
  </div>    

  
<!-- Social Links -->
  <div id="section3" class="container-fluid" style="height: 70vh; padding: 20px">
    <h1>Follow me </h1>
    <div class="mycontainer">
        
        <div style="margin: 5px;" >
            <img class="image-facebook" src="picture6.png" alt="Facebook" width="300px" onclick="openLink1()">
         
          </div>
          
          <div style="margin: 5px;" >
            <img class="image-instagram"src="picture7.png" alt="Facebook" width="300px" onclick="openLink2()" >
           
          </div>
          
          <div style=" margin: 5px;" >
            <img class="image-github" src="picture8.png" alt="Facebook" width="300px" onclick="openLink3()">
            
          </div>
        
        </div>
    </div>
  
</div>



<!-- Dev Page -->
<div id="section4" class="container-fluid" style=" margin-top: 200px;   height: 220vh; padding: 20px;">
<h1>PHP Lessons</h1>
  <div style= "background: gray;padding: 10px;">
  <h2 style="margin-top: 30px;">Variables</h2>
  <?php
  $txt = "W3Schools.com";
  echo "I love $txt!";
  ?>
  </div>



<div style="background: gray; padding: 10px;">
<h2 style= "padding-left: 10px; color: #111;">Echo/Print</h2>
<?php
echo "PHP is Fun!<br>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
print "Hi, I'm using PHP scripting language<br>";
print "This statement was executed using print";
?> 


<div>
<h2 style="background: gray; margin-top: 20px; padding: 10px;">Data Types</h2>

<?php 
echo "<h3>Strings<br></h3>";
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
echo "<br>";

echo "<h3>Integer<br></h3>";
$x = 5985;
var_dump($x);
echo "<br>";

echo "<h3>Float<br></h3>";
$x = 10.365;
var_dump($x);
?>




<div style="background: gray; padding: 10px;">
<h2 style="margin-top: 10px; color: #111;">Operators & Math</h2>

<?php
echo "<h3>Pi<br></h3>";
echo(pi());
echo "<br>";

echo "<h3>min & max<br></h3>";
echo "(0, 150, 30, 20, -8, -200)<br>";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));

echo "<h3>sqrt<br></h3>";
echo "The square root of 64 is ";
echo (sqrt(64) . "<br>");

echo "The square root of 16 is ";
echo(sqrt(16) . "<br>");
?>


<div style="background: gray; padding: 10px;">
<h2 style="margin-top: 20px">Loops</h2>
<?php  

echo "<h3>Count from 1 to 10 <br></h3>";
$i = 1;

while ($i < 11) {
  echo $i;
  $i++;
} 
?>  




<div style="background: gray; padding: 10px;">
<h2 style="margin-top: 10px; color: #111;">PHP Form</h2>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3>PHP Form Validation Example</h3>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br>
</form>

<?php
echo "<h3>Your Input:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>







<script>
   
  function scrollToSection(sectionId) {
      var section = document.getElementById(sectionId);
      if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
      }
  }


  document.querySelector('a[href="#section1"]').addEventListener('click', function() {
      scrollToSection('section1');
  });

  document.querySelector('a[href="#section2"]').addEventListener('click', function() {
      scrollToSection('section2');
  });
  document.querySelector('a[href="#section3"]').addEventListener('click', function() {
      scrollToSection('section3');
  });

  function openLink1() {
    window.open('https://www.facebook.com/reyceel16/', '_blank');
  }
  function openLink2() {
    window.open('https://www.instagram.com/reyceelll/', '_blank');
  }
  function openLink3() {
    window.open('https://github.com/rvcarcueva2/', '_blank');
  }


  
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
