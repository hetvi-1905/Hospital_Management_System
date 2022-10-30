<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title> Patient Management System</title>
        <link rel="stylesheet" href="website.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    
</style>
<?php


// if ($_SERVER['REQUEST_METHOD'] == 'POST') //check is there postback
//   echo "postback occurs"."</br>";
// else
//   echo "first time page is loaded";

if(count($_POST) > 1)
  {
//   echo $_SERVER['REQUEST_METHOD'];
  if($_POST['username'] == null  )
   	 echo "<font color=red>". "First name / Last name or Age should not be empty". "</font>". "<br />";
  else
  {
  $con = mysqli_connect("localhost","root","");
  if (!$con)
  {
  //   die('Could not connect: ' . mysqli_error($con))
   ;
  }

mysqli_select_db($con, "care&care");

if(mysqli_query($con , "INSERT INTO contact ( username , email , feedback ) VALUES ('$_POST[username]','$_POST[email]','$_POST[feedback]')"))
   {
    // echo "row is inserted successfully". "<br>"
    ;
   }
else
   {
    echo "There is error" . mysqli_error($con);
    die('Could not connect: ' . mysqli_error($con));
   }
mysqli_close($con);
header("Location:contact.php");   // ----------------> Error !!!!!!!!!!
  }
}
else
  {
    // echo "<br>"."first time page is loaded"
    ;
  }
 
    
?> 

    </head>
    <body>
        <section class="sub-header">
           <nav>
               <a href="website.php"><img src="images/logoHK2.jfif"></a>
                 <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                     <ul>
                     <li>
                        <a href="website.php">Home</a></li>
                        <li><a href="register.php">Register</a></li>
                         <li><a href="login.php">Sign In</a></li>
                         <li><a href="specialities.php">Specialities</a></li>
                         <li><a href="appointment.php">Appointment</a></li>
                         <li><a href="contact.php">Contact</a></li>
                     </ul>
                 </div>
                 <i class="fa fa-bars" onclick="showMenu()"></i>
           </nav>

   <h1> Contact Us</h1>      
        </section>

    <!-- --------contact us-----------------     -->
   <div class="location" style="padding-bottom:10px">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.702866164377!2d72.59026961480033!3d22.997951384965567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85129ca5f131%3A0xe9ca197b0df3cd1b!2sCare%20and%20Cure%20Multispeciality%20Hospital!5e0!3m2!1sen!2sin!4v1665395670703!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

    <section class="conatct-us" >
        <div class="row">
            <div style="padding-bottom:100px" class="contact-col text_with_icons">
                <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5> Care & Cure Hospital</h5>
                    <p>Opposite to Vivyana Mall,</p>
                    <p>Gujarat,India</p>
                </span>
                </div>
                <div>
                 <i class="fa fa-phone"></i>
                <span>
                     <h5>+9879718303</h5>
                    <p>Monday to Saturday, 10 AM to 6 PM </p>
                </span>
               </div>
               <div>
                <i class="fa fa-envelope-o"></i>
                 <span>
                     <h5>care&cure@gmail.com</h5>
                    <p>Email us for any query</p>
                </span>
                </div>
            </div> 

            <div class="contact-col" style="width:60%;margin:auto;">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="contact-form">
                <h2 style="padding-bottom:10px,">Feedback Form</h2><br>

                <!-- <label for="name">Patient's Name:</label>
                    <input type="text" id="name" name="r_name" value="<?php if(isset($_REQUEST['r_name'])) { echo $_REQUEST['r_name']; } ?>" required>
                    <br> -->
                    <label for="name">Username</label>
                    <br>
                    <input type="text" id="name" name="username" value="<?php if(isset($_REQUEST['username'])) { echo $_REQUEST['username']; } ?>" required>
                    <br>
                    <!-- <input type="text" name="name" placeholder="Username" value="<?php if(isset($_REQUEST['name'])) { echo $_REQUEST['name']; } ?>" required> -->
                    <!-- <input type="email" name="email" placeholder="Email id" value="<?php if(isset($_REQUEST['email'])) { echo $_REQUEST['email']; } ?>" required> -->
                    <label for="email">Email</label>
                    <br>
                    <input type="email" id="email" name="email" value="<?php if(isset($_REQUEST['email'])) { echo $_REQUEST['email']; } ?>" required>
                    <br>
                    <!-- <input type="text" name="subject" placeholder="Enter your subject" required> -->
                    <label for="feedback">Feedback</label>
                    <br>
                    <textarea rows="8" id="feedback" name="feedback" value="<?php if(isset($_REQUEST['feedback'])) { echo $_REQUEST['feedback']; } ?>" required></textarea>
                    <br>

                    <!-- <textarea rows="8" name="feedback" placeholder="feedback" value="<?php if(isset($_REQUEST['feedback'])) { echo $_REQUEST['feedback']; } ?>" required></textarea> -->
                    <button type="submit" class="hbutton red-button">Submit</button>
                </form>
            </div>
        </div>
    </section>
    

        <!-- -----------footer----------- -->
<section class="footer">
    <h4>
        About Us
    </h4>
    <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, enim optio officia repellendus impedit quisquam voluptatum. <br>Iusto velit sint, ea rerum aspernatur, recusandae nisi consequuntur nemo, facilis magni commodi sed?</p> -->
    <p>This iconic healthcare is been inaugurated in 1901 by Iron Man of India, Vallabhbhai Patel, Former Deputy Prime Minister of India. <br>Care and Cure Hospital has been at the forefront of healthcare for over more than 100 years.</p>
    
    <div class="icons">
        <i class="fa fa-fackbook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p> Made with <i class="fa fa-heart-o"></i> by Hetvi & Kausha </p>
</section>
        <!-- ------------Javascript for togglt menu---------- -->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu()
            {
                navLinks.style.right="0";
            }
            function hideMenu()
            { 
                navLinks.style.right="-200px";
            }
        </script>
    </body>
</html>