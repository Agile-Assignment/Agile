<?php

//start session
session_start();

		
			session_unset();	//remove all session variables
			session_destroy();
			
			echo"<script type='text/javascript'>
				  alert('You are now logged out.');
				  window.location = 'index.php';
				</script>";
				
			//header("Refresh:0;url=index.php");

?>