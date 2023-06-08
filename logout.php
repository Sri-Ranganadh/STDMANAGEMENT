<?php
    session_start();
    session_unset();
    session_destroy();
    $URL = "http://localhost/codes/student%20management-new/index.html";
    header("Location: ".$URL, true, 301);
?>