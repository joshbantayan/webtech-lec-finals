<?php
	session_start();
   
   	if(session_destroy()) {
      header("Location:http://lecture/pages/login.php");
    }
?>