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
<script type="text/javascript">
function abc()
{
document.frm1.submit();
}    
</script>
</head>
    <body >
        <section class="sub-header">
           <nav>
               <a href="website.php"><img src="images/logoHK2.jfif"></a>
                 <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                     <ul>
                     <li><a href="website.php">Home</a></li>
                     <li><a href="register.php">Register</a></li>
                         <li><a href="login.php">Sign In</a></li>
                         <li><a href="specialities.php">Specialities</a></li>
                         <li><a href="appointment.php">Appointment</a></li>
                        <li><a href="contact.php">Contact</a></li>
                     </ul>
                 </div>
                 <i class="fa fa-bars" onclick="showMenu()"></i>
           </nav>

   <h1>Specialities and Doctor's Profile</h1>      
        </section>


<!-- <php code for selction list for speciality by department name > -->


<!--***************  -->
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con , "care&care");

$result = mysqli_query($con,"SELECT DISTINCT department_name FROM speciality ORDER BY department_name");

?>
<!-- ***************** -->

<form name="frm1" action=<?php echo "'$_SERVER[PHP_SELF]'"; ?> method="POST">

<!-- <h3 style="text-align:center">
Select Department:<br />
</h3> -->

<!-- ****************** -->
<?php
//Displaying of Department list DROPDOWN 
echo "<br><br>";
echo "<h2 style='text-align:center'>";
echo "Select Department:";
echo "<br>";
echo '<select name="department_name" style="width:300px" onchange="abc()">';
echo "</h2>";
while($row = mysqli_fetch_array($result))
{
echo "<option value=". "'$row[department_name]'";
if(isset($_POST['department_name']))
  { 
  if ($_POST['department_name'] == $row['department_name']) 
     echo " selected";
  }	 
echo ">" . $row['department_name'] . "</option>";
}
echo '</select>';
?>
<!-- ************************** -->


<!-- Php code for selection list of doctor from department selected above -->

<!-- ************************** -->
<?php


if(isset($_POST['department_name']))
 {
    // echo"hi";
 echo "<br><br/>Select Doctor:<br />";
 echo '<select name="doctor_name" style="width:300px" onchange="abc()">';
 
 $result = mysqli_query($con, "SELECT doctor_name FROM speciality where department_name='$_POST[department_name]' ORDER BY doctor_name");
 while($row = mysqli_fetch_array($result))
  {
//    echo "<option value=". "'Select Doctor Name'";
   echo "<option value=". "'$row[doctor_name]'";

   if(isset($_POST['doctor_name']))
      { 
         if ($_POST['doctor_name'] == $row['doctor_name']) 
            echo " selected";
       }	 
   echo ">" . $row['doctor_name'] . "</option>";
   }
echo '</select>';
 }
?>
<!-- ************************** -->

<!-- php  code for doc info -->
        
<?php

if(isset($_POST['department_name']) && (isset($_POST['doctor_name'])))
{
    $result = mysqli_query($con,"SELECT * FROM speciality where department_name='$_POST[department_name]' AND doctor_name='$_POST[doctor_name]'");
    $path = "./images/";



    while($row = mysqli_fetch_assoc($result))
    {
    // echo "$row";
    echo "<section class='about-us' >";
                echo"<h1 style='text-align:left'> $row[department_name] </h1>";
                echo"<div class='row'>"; 
                    echo"<div class='about-col'>";
                        echo"<img style='text-align:left' src='$path$row[image_name]' alt='$row[image_name]'  >";
                    echo"</div>";
                    echo"<div class='about-col'>";
                        echo"<h1 style='text-align:left'>$row[doctor_name]</h1>";
                        echo"<p style='text-align:left'>$row[short_des]</p>";
                       echo"<h5 style='text-align:left'>Education</h5>";
                       echo"<p style='text-align:left'> $row[detailed_des]</p>";
                        echo"<h5 style='text-align:left'>Experience</h5>";
                        echo"<p style='text-align:left'>$row[exp]</p>";
                        echo"<p style='text-align:left'>Phone no.  +91 $row[phoneno]</p>";
                    echo"</div>";  
                echo"</div>";
    echo"</section>";
    }
}


?>
</form>
       
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
    <p> Made with <i class="fa fa-heart-o"></i>  by Hetvi & Kausha</p>
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