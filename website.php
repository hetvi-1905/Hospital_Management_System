<!DOCTYPE html>
<html>
    <head>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title> Patient Management System</title>
        <link rel="stylesheet" href="website.css">

        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Rubik:wght@300&display=swap" rel="stylesheet"> -->

<!-- icons mate link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>    
</style>

    </head>
    <body>
        <!-- --------------------------header------------------- -->
        <section class="header">
           <nav>
               <a href="website.php"><img src="images/logoHK2.jfif"></a>
               <i class="fa fa-bars" onclick="showMenu()"></i>
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
                 <!-- <i class="fa fa-bars" onclick="showMenu()"></i> -->
           </nav>

   <div class="text-box">
       <h1> Care & Cure Hospital </h1>
       <p> Your Health is our First Priority!</p>
       <!-- <a href="" class="hbutton">Visit Us to know more.</a> -->
   </div>        
        </section>
<!-- -----------course--------- -->
        <section class="course">
            <h1>Highlights</h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, vero!</p> -->
            <div class="row courses">
                <div class="course-col">
                <h3>Our Departments and Centers</h3>
                <p>
                    Care and Cure Hospital offers leading edge medical services through various departments. Each clinical team comprise of members from various disciplines who collaborate and have close symbiotic relationships to ensure world class service delivery.
                </p>
            </div>
            <div class="course-col">
                <h3 style="font-weight: bolder;">Our Doctors</h2>
                <p>
                    Care and Cure doctors belong to a group of highly qualified and experienced clinicians. Patient-centric and tireless listeners, our doctors implement a holistic plan for patient wellness and recovery.
                </p>
            </div>
            <div class="course-col">
                <h3>Our Clinical Specialities</h3>
                <p>
                    The clinicians attached to our Clinical Specialties have honed their academic knowledge and skills from some of the best hospitals and academic institutions worldwide. With around thirty-five disciplines under one roof, our specialists collaborate to ensure a clinically sound plan along with matching execution for a quick recovery.
                </p>
            </div>
        </div>
        </section>
        <!-- -----------------campus------------ -->
        <section class="campus">
              <h1>Our Facilities</h1>
              <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero sequi doloremque officia aspernatur laborum, delectus aliquid cupiditate id pariatur? Ipsum.</p> -->
            <p> We provide over 80 rooms as well as we have the pharmacy which includes all kinds of medicines required. The cafeteria, which allows the patient's companion to have a great meal.
            </p>
              <div class="row">
                    <div class="campus-col">
                     <img src="images/accomodation.jpg">
                     <div class="layer">
                         <h3>Accomodation</h3>
                     </div>
                     </div>
                     <div class="campus-col">
                        <img src="images/cafe.jpg">
                        <div class="layer">
                            <h3>Cafeteria</h3>
                        </div>
                        </div>
                        <div class="campus-col">
                            <img src="images/pharmacy2.jpg">
                            <div class="layer">
                                <h3>Pharmacy</h3>
                            </div>
                        </div>
             </div>    
        </section>
        <!-- -----------facilities------------- -->
        <section class="facilities">
            <h1>Technologies being Used</h1>
            <p class="center">Here we use highly equiped machinaries which are latest, in order to do the betterment for the patients.</p>
            <div class="row">
                <div class="facilities-col">
                    <img src="images/robot1.jpg">
                    <h3 style="text-align:center">Robot assisted Heart Surgery</h3>
                    <p style="text-align:center"> Robotic cardiac surgery results in fast recovery, around two weeks, as the patient's chest skeleton isn't disturbed. Patients agree to surgical mitral valve repair earlier when they realize they can get back to work after two weeks.</p>
                </div>
                <div class="facilities-col">
                    <img src="images/robot2.jpg">
                    <h3 style="text-align:center">Infection-Detecting Technologies </h3>
                    <p style="text-align:center">These technologies rapidly identify the infections which results in faster diagnosis.It helps in faster diagnosis which results in faster treatment and faster recovery. </p>
                </div>
                <div class="facilities-col">
                    <img src="images/robot3.jpg">
                    <h3 style="text-align:center">High-Tech MRI Machines</h3>
                    <p style="text-align:center">A 3T machine has a greater signal strength than other MRI machines, in fact, it is the greatest strength an MRI machine can have. 3T MRI scanners create extremely clear and vivid images that can be completed quicker.</p>
                </div>
            </div>
        </section>
        
        <!-- -----------footer----------- -->
<section class="footer" style="margin-top:50px;">
    <h4>
        About Us
    </h4>
    <p>This iconic healthcare is been inaugurated in 1901 by Iron Man of India, Vallabhbhai Patel, Former Deputy Prime Minister of India.<br> Care and Cure Hospital has been at the forefront of healthcare for over more than 100 years.</p>
    
    <div class="icons">
        <i class="fa fa-fackbook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p> Made with <i class="fa fa-heart-o"></i>  by Hetvi Bhora</p>
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
