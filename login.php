<?php
	if(!isset($_SESSION))
		session_start();

	if(isset($_POST["submit"])){
		$id = $_POST["userID"];
		$pass = $_POST["password"];

		//check login credentials
		$conn = mysqli_connect('localhost', 'root', '', 'game');
		mysqli_select_db($conn, 'user');
		
		$query = "SELECT * FROM user WHERE Username = '$id'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
			$query = "SELECT * FROM user WHERE Password = '$pass'";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0){
				$_SESSION['users'] = $id;
				$_SESSION['status'] = true;
				echo "<script>alert(\"You have successfully login\");</script>";
				echo "<script>location.href=\"index.php\"</script>"; //redirect homepage
				exit();
			}
			else {
				$_SESSION['status'] = false;
				echo "<script>alert('Wrong credentials! Please try again');</script>";
				echo "<script>location.href=\"login.php?submitFail=true\"</script>";//reopen login modal
				exit();
			}
		
		
	}
	}
	include 'header.php';

?>
	

			
	
	
<section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Sign In</h2>
            <form action="login.php" class="contact-form" method="post">
              <div class="form-group">                
                <input type="text" name="userID" class="form-control" placeholder="UserID">
              </div>              
              <div class="form-group">
               <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
			  <input type='hidden' name="submitted" value='true'>
              <button type="submit" name="submit" data-text="SUBMIT" class="button button-default"><span>SIGN IN</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
	include('footer.php');
?>
	
	
	
	
	 