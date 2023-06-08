<?php
  session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Portal</title>
        <link rel="stylesheet" href="css/lecturer_home.css">
     
    </head>
    <body>
    <?php 
        print_r($_SESSION);
        if(!(isset($_SESSION["Id"])&&isset($_SESSION["Password"]))){
          $URL = "http://localhost/codes/student%20management-new/index.html";
          header("Location: ".$URL, true, 301);
        }
    ?>
        <div id="rcorners1" >
           <center><font style="font-family: sans-serif; color: rgb(247, 243, 243); font-size: larger;"><b><i>SRKR ENGINEERING COLLEGE</i></b></font></center> 
           <center><font style="font-family: sans-serif; color: rgb(247, 243, 243); font-size: small;"><b><i></i></b></font></center> 
        </div>
        <br><br><br>
        <center>
            <div id="container">
                <h2>Faculty Name</h2>
                <div class="imgcontainer">
                    <img src="images/image.png" alt="Avatar" class="avatar">
                  </div>
                  <a href="Faculty_Profile.html" >
                  	<button class="button button1" type="submit">Profile</button>
                  </a>
                  <a href="Classes.html" >
                  	<button class="button button1" type="submit">Classes</button>
                  </a>
                <div>
                   <a href="logout.php"><button class="button button1" >Logout</button></a>
                </div>
            </div>
        </center>
    </body>
</html>
