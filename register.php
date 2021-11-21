<?php

	if (isset($_POST['submitted']) && $_POST['submitted'] == 'true') {

		if (isset($_POST['username']) && empty($_POST['username'])) {

			// display error message (userID is empty)
			echo "<script type='text/javascript'>
			alert('Error: Please enter your userID.');
			history.go(-1);
			</script>";

		} 
 
		else if (isset($_POST['password']) && empty($_POST['password'])) {

			// display error message (password is empty)
			echo "<script type='text/javascript'>
			alert('Error: Please enter your password.');
			history.go(-1);
			</script>";

		} 
		else if (isset($_POST['email']) && empty($_POST['email'])) {

			// display error message (email is empty)
			echo "<script type='text/javascript'>
			alert('Error: Please enter your email.');
			history.go(-1);
			</script>";

		}

		 

		{



			

				//to connect to database
				$connection = new mysqli ('localhost','root','','game');
				$login = $connection -> prepare(					//to reject SQL injection
				'INSERT INTO user (Username,Email,Password) VALUES(?,?,?);');

				$login -> bind_param('sss',$_POST['username'],$_POST['email'],$_POST['password']);
				
				
				if ($login -> execute()) {
				
					$affectedRow = $login -> affected_rows;
					
					$login -> close();
					$connection -> close();
					
					if($affectedRow == 1){
						echo"<script type = 'text/javascript'>
						alert('Your account has been created successfully');
						window.top.location='login.php';
						</script>";	
					}
					else{
						echo"<script type = 'text/javascript'>
						alert('The userID has been used');
						window.top.location='register.php';
						</script>";			
					}

				} else {
				
					
					echo"<script type = 'text/javascript'>
					alert('The userID has been used');
					window.top.location='register.php';
					</script>";
					$login->close();
					$connection->close();
				}
			}
		}
		
	 else {

include 'header.php';
?>
   <!-- Start Register section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Register</h2>
            <form action="register.php" class="contact-form" method="post">
              <div class="form-group">                
                <input type="text" name="username" class="form-control" placeholder="UserID">
              </div>
              <div class="form-group">                
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>  
			   <div class="form-group">
               <input type="password" name="password" class="form-control" placeholder="Password">
              </div>


              
             <div class="row mt-4">
              <br>			  
            
			  <input type='hidden' name="submitted" value='true'>
              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Register section -->

<?php
include('footer.php');
  }
?>