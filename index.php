<?php

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
   $sql = 'SELECT gameID,Name, Year, Image FROM game ORDER BY gameID';
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
		  	$name = $row['Name'];
			$year = $row['Year'];
			$image = $row ['Image'];
			$id = $row ['gameID'];
			

?>
   
     <main>

               <div class="container">
                    <div class="row">
                         

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="<?= $image; ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Year"><i class="fa fa-calendar"></i> <?= $year; ?></span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><?= $name; ?></a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog.php?action=1&id=<?php echo $id ?>" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

     </main>
<?php
	}
   }
	
?>
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
