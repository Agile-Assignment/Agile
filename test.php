<?php
 session_start();
if(isset($_SESSION['status'])){
	if($_SESSION['status'] == true)	
		include('headerUser.php');
	else
	include('header.php');
}
else
	include('header.php');

 ?>
 
 <?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'game';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   $sql = 'SELECT Name, Year, Image FROM game ORDER BY gameID';
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
		  	$name = $row['Name'];
			$year = $row['Year'];
			$image = $row ['Image'];
			

?>
     <!-- HOME -->
     <section id="home">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="<?= $image; ?>">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1><?= $name; ?></h1>
                                        <h3><?= $year; ?></h3>
                                        <a href="post.php?action=1&id=<?php echo $id ?>" class="section-btn btn btn-default">Details</a>
                                   </div>
                              </div>
                         </div>
                    </div>


               </div>
     </section>
	 
<?php
	}
   }
	
?>
			

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">This is the blog that we are going to review about games.
                         </div>
                    </div>
               </div>
          </section>
         
     </main>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       

   <?php
	include('footer.php');
?> 