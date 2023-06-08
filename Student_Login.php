<?php

    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $url = 'https://';
    } else {
        $url = 'http://';
    }
    $url .= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];
    // $url.= $_SERVER['PHP_SELF'];

    if(isset($_POST["id"])&&isset($_POST["password"])){
        $ID = $_POST["id"];
        $PWD = $_POST["password"];

        // Connect to database and verify the credentials

        if($ID==101&&strcmp($PWD,"myName")==0){
            session_start();
            $_SESSION["Id"] = $ID;
            $_SESSION["Password"] = $PWD;
            $URL = "http://localhost/student%20management-new/";
            header("Location: ".$URL."Student_Home.php", true, 301);
        }
        else{ 
            $url.= "/Lecturer_Login.html";
            // echo "<script>alert('Invalid Credentials');window.location='".$url."';</script>";
            echo "<script>alert('Invalid Credentials');window.location='http://localhost/student%20management-new/index.html';</script>";
        }
    }
    else{
        // echo "<script>alert('Invalid Request');window.location='".$url."/Lecturer_Login.html';</script>";
        echo "<script>alert('Invalid Request');window.location='http://localhost/student%20management-new/index.html';</script>";
    }
?>