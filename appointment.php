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
<!-- --------------php----------------- -->
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') //check is there postback
//   echo "postback occurs"."</br>";
// else
//   echo "first time page is loaded";

if(count($_POST) > 1)
  {
//   echo $_SERVER['REQUEST_METHOD'];
  if($_POST['r_name'] == null  )
   	 echo "<font color=red>". "First name / Last name or Age should not be empty". "</font>". "<br />";
  else
  {
  $con = mysqli_connect("localhost","root","");
  if (!$con)
    {
      die('Could not connect: ' . mysqli_error($con));
    }

  mysqli_select_db($con, "care&care");

if(mysqli_query($con , "INSERT INTO appointment ( pname , dob , gender , email , phoneno , speciality , doctor , roa , doa, time ) VALUES ('$_POST[r_name]','$_POST[dob]','$_POST[gender]','$_POST[email]','$_POST[phoneno]','$_POST[speciality]','$_POST[doctor]','$_POST[roa]','$_POST[doa]','$_POST[time]')"))
{   //echo "row is inserted successfully". "<br>";
    ;
}
else
//    echo "There is error" . mysqli_error();
   die('Could not connect: ' . mysqli_error($con));
mysqli_close($con);
header("Location:appointment.php");
  }
}
else
//   echo "<br>"."first time page is loaded";
  
    
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

   <h1> Book your appointment now! </h1>      
        </section>

    <!-- --------contact us------------------->

    <section class="conatct-us">
        <div class="row" >
        <div style="width:80%;margin:auto;">
            <div class="contact-col" style="width:70%;margin:auto;">
                <h1> Appointment Details</h1><br>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="contact-form">
                    <label for="name">Patient's Name:</label>
                    <input type="text" id="name" name="r_name" value="<?php if(isset($_REQUEST['r_name'])) { echo $_REQUEST['r_name']; } ?>" required>
                    <br>

                    <label for="dob">Date of Birth:</label><br>
                    <input type="date" id="dob" name="dob" value="<?php if(isset($_REQUEST['dob'])) { echo $_REQUEST['dob']; } ?>"  required>
                    <br>
                    
                    <label for="gender">Gender:</label><br>
                    <input id="gender" type="radio" name="gender" value="Male"> Male
                    <input id="gender" type="radio" name="gender" value="Female"> Female
                    <input id="gender" type="radio" name="gender" value="Others"> Others 

                    <br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="<?php if(isset($_REQUEST['email'])) { echo $_REQUEST['email']; } ?>" placeholder="Enter your email id" required>
                    <br>

                    <label for="phone">Phone no.:</label><br>
                    <input type="tel" name="phoneno" id="phone" placeholder="0123456789" pattern="[0-9]{10}" value="<?php if(isset($_REQUEST['phoneno'])) { echo $_REQUEST['phoneno']; } ?>" required>
                    <br>

                    <div style="margin-bottom:10px;">
                        <label for="specialities">Specialities: </label>
                        <select id="speciality" name="speciality" required>
                            <option value="">Select Specialities</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Dentistry">Dentistry</option>
                        </select>
                    </div><br>

                    <div style="margin-bottom:10px;">
                        <label for="doctor">Doctor: </label>
                        <select id="doctor" name="doctor" required>
                            <option value="">Select Doctor</option>
                            <option value="Dr. Amol Patil">Dr. Amol Patil</option>
                            <option value="Dr. Rajesh Kapoor">Dr. Rajesh Kapoor</option>
                            <option value="Dr. Seeta Patel">Dr. Seeta Patel</option>
                            <option value="Dr. Anil Handoo">Dr. Anil Handoo</option>
                        </select>
                    </div><br>

                    <div style="margin-bottom:10px;">
                        <label for="roa">Reason for Appointment: </label>
                        <select id="roa" name="roa" required>
                            <option value="">Select Reason</option>
                            <option value="OT">OT</option>
                            <option value="OPD">OPD</option>
                        </select>
                    </div><br>

                    <label for="doa">Date of Appointment:</label><br>
                    <input type="date" id="doa" name="doa" value="<?php if(isset($_REQUEST['doa'])) { echo $_REQUEST['doa']; } ?>" required>
                    <br>

                    <label for="appt">Select a time:</label><br>
                    <input type="time" id="time" name="time" value="<?php if(isset($_REQUEST['time'])) { echo $_REQUEST['time']; } ?>">
                    <br>


                    <button type="submit" class="hbutton red-button">Submit</button>
                    <button type="reset" class="hbutton red-button">Reset</button><br>

                    <!-- <p style="font-size:16px;">Do you want to proceed with the online payment process?</p>
                    
                    <a href="payment.html" ><button type="button" class="hbutton red-button" > Yes </button></a>
                    
                    <button type="button" class="hbutton red-button" onclick="alert('You are requested to do the payment offline.')">No</button> -->
                    
                </form>
            </div>
        </div>
        </div>
    </section>
    

        <!-- -----------footer----------- -->
<section class="footer">
    <h4>
        About Us
    </h4>
    <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, enim optio officia repellendus impedit quisquam voluptatum. <br>Iusto velit sint, ea rerum aspernatur, recusandae nisi consequuntur nemo, facilis magni commodi sed?</p> -->
    <p>This iconic healthcare is been inaugurated in 1901 by Iron Man of India, Vallabhbhai Patel, Former Deputy Prime Minister of India.<br> Care and Cure Hospital has been at the forefront of healthcare for over more than 100 years.</p>
    
    <div class="icons">
        <i class="fa fa-fackbook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p> Made with <i class="fa fa-heart-o"></i> by Hetvi Bhora </p>
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
