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
      die('Could not connect: ' . mysqli_error());
    }

  mysqli_select_db($con, "care&care");

// if(mysqli_query($con , "INSERT INTO register ( pname , dob , gender , email , phoneno , speciality , doctor , roa , doa, time ) VALUES ('$_POST[r_name]','$_POST[dob]','$_POST[gender]','$_POST[email]','$_POST[phoneno]','$_POST[speciality]','$_POST[doctor]','$_POST[roa]','$_POST[doa]','$_POST[time]')"))
if(mysqli_query($con , "INSERT INTO register ( pname , dob , gender , email , phoneno , address , city , state , country, pincode , username , password ) VALUES ('$_POST[r_name]','$_POST[dob]','$_POST[gender]','$_POST[email]','$_POST[phoneno]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[pincode]','$_POST[username]','$_POST[password]')"))
   {
    // echo "row is inserted successfully". "<br>"
    ;
   }
else
//    echo "There is error" . mysqli_error();
   die('Could not connect: ' . mysqli_error($con));
mysqli_close($con);
header("Location:register.php");
  }
}
else
{
//   echo "<br>"."first time page is loaded";

    ;
}
  
    
?> 


<!----------------------- php ends ------------------->

</head>
    <body>
        <section class="sub-header" >
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

   <h1> Patient Registration</h1>    
   <!-- <div>
    <a href="#row1" class="hbutton" >Sign In</a>  
    <a href="#row2" class="hbutton" >Register</a>  
   </div> -->
        </section>

    <!-- --------contact us------------------->
        
        <div class="row" id="row2" >
            <div style="width:60%;margin:auto;">
            <div class="contact-col">
                <h1> Registration Form </h1><br>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="contact-form">

                    <label for="name">Patient's Name:</label>
                    <input type="text" id="name" name="r_name" value="<?php if(isset($_REQUEST['r_name'])) { echo $_REQUEST['r_name']; } ?>" required>
                    <br>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" value="<?php if(isset($_REQUEST['dob'])) { echo $_REQUEST['dob']; } ?>" required>
                    <br>
                    
                    <label for="gender">Gender:</label><br>
                    <input id="gender" type="radio" name="gender" value="Male"> Male 
                    <input id="gender" type="radio" name="gender" value="Female"> Female 
                    <input id="gender" type="radio" name="gender" value="Others"> Others 
                    <br>
                    <br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email id" value="<?php if(isset($_REQUEST['email'])) { echo $_REQUEST['email']; } ?>" required>
                    <br>

                    <label for="phone">Phone no.:</label><br>
                    <input type="tel" name="phoneno" id="phone" placeholder="0123456789" pattern="[0-9]{10}" value="<?php if(isset($_REQUEST['phoneno'])) { echo $_REQUEST['phoneno']; } ?>" required>
                    <br>

                    <label for="address">Address:</label><br>
                    <textarea rows="8" id="address" name="address" value="<?php if(isset($_REQUEST['address'])) { echo $_REQUEST['address']; } ?>" required></textarea>
                    <br>

                    <div style="margin-bottom:10px;">
                    <label for="city">City: </label>
                    <select id="city" name="city"  required>
                        <option value="">Select City</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Amreli">Amreli</option>
                        <option value="Anand">Anand</option>
                        <option value="Bharuch">Bharuch</option>
                        <option value="Bhavnagar">Bhavnagar</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Junagadh">Junagadh</option>
                        <option value="Kachchh">Kachchh</option>
                        <option value="surat">Surat</option>
                        <option value="Navsari">Navsari</option>
                    </select>
                    </div><br>

                    <div style="margin-bottom:10px;">
                    <label for="state">State: </label>
                    <select id="state" name="state" required>
                        <option value="">Select State</option>
                        <option value="Gujarat">Gujarat</option>
                    </select>
                    </div><br>

                    <div style="margin-bottom:10px;">
                    <label for="country">Country: </label>
                    <select id="country" name="country" required>
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                    </select>
                    </div><br>
 
                    <label for="pincode">Pin Code:</label><br>
                    <input type="tel" name="pincode" id="pincode" placeholder="012345" pattern="[0-9]{6}" required>
                    <br>

                    <label for="name">Create Username:</label><br>
                    <input type="text" id="name" name="username" required><br>
                    <label for="password">Create Password:</label><br>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" class="hbutton red-button">Submit</button>
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
    <p>This iconic healthcare is been inaugurated in 1901 by Iron Man of India, Vallabhbhai Patel, Former Deputy Prime Minister of India. <br>Care and Cure Hospital has been at the forefront of healthcare for over more than 100 years.</p>
    
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
