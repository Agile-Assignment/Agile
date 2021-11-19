<?php
include('header.php');
 ?>

<?php

     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'game';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


     if(! $conn ) {
          die('Could not connect: ' . mysqli_error());
     }
     if(isset($_GET['id'])){
          $id = $_GET['id'];
     }
     // $sql = 'SELECT Name, Publisher, Year, Description, Image, Date FROM game ORDER BY gameID';
     $sql = "SELECT Name, Publisher, Year, Description, Image, user , DATE (Date) as Time FROM game WHERE gameID = '$id'";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
		    $name = $row['Name'];
            $publisher = $row['Publisher'];
			$year = $row['Year'];
            $description = $row['Description'];
			$image = $row['Image'];
			$date = $row ['Time'];
			$user = $row['user'];

?>


     <section>
          <div class="container">
               <h2>
               <?php
                         echo "$name";
                         echo ", ";
                         echo "$publisher";
                         echo ", ";
                         echo "$year";
               ?>
                    <!-- Game Name -->
               </h2>

               <p class="lead">
                    <i class="fa fa-user"></i> Username who added the game : <?= $user; ?>&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-calendar"></i> 
                    <?php
                         echo "$date";
                    ?>
                    <!-- 12/06/2020 10:30  -->
                    &nbsp;&nbsp;&nbsp;
               </p>

               <!-- <?php
                    // echo "$new[Image]";
               ?> -->
               <img style="height:500px ;width=300px;" src="<?= $image; ?>">
               <!-- <img src="images/other-image-fullscreen-1-1920x700.jpg" class="img-responsive" alt=""> -->

               <br>

               <h3>Description</h3>
               <p>
               <?php
                    echo "$description";
               ?>
                    <!-- Details of the game -->
               </p>

<?php
	 }}
?>


               <br>


               <br>
    <h4>Reviews</h4>

<?php

     // $con = mysqli_connect("localhost","root","","test");
     // include('connection.php');
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'game';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


     if(! $conn ) {
          die('Could not connect: ' . mysqli_error());
     }
	 
	$sql = "SELECT GameID,Names, Rate, Message, DATE (Timeline) as Date FROM rating where GameID='$id'";

     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
		    $Name = $row['Names'];
            $rate = $row['Rate'];
			$message = $row['Message'];
            $date = $row['Date'];


?>

    <div class="row">
                    

    <div class="col-md-8 col-xs-12">

	               <div class="container" id="userReview">	
	               <h4> 
		          <!-- user who added the review. take username  -->
		          <h4 class="fa fa-user"> Reviewer:</h4> <?= $Name; ?>&nbsp;&nbsp;&nbsp;
		          <h4 class="fa fa-calendar"></h4> 
		
		          <!-- date of the review. take date from blog.php?  -->
		          <?php
			     echo "$date";
		          ?>
		          <!-- 12/06/2020 10:30  -->
		          &nbsp;&nbsp;&nbsp;
		
		          <!-- Rating of the review. take rating from blog.php?  -->
		          <h4>Rating:</h4>
				  <?php
					echo "$rate";
		          ?>
					<?php
					for( $x = 0; $x < 5; $x++ )
					{
					if( floor( $rate )-$x >= 1 ) //rating in int 
					{ echo '<i class="fa fa-star"></i>'; } //gold star picture
					else
					{ echo '<i class="fa fa-star-o"></i>'; } //black star picture
					}
					?>

		          <!-- textarea of the review. take rating textarea from blog.php? -->
		          <p>
		          <?php
			     echo "$message";
		          ?>
		         	</p>
                    </h4>
	
	          </div>
     
     <?php
	}
   }
	
?>
                    </div>
               </div>
          </div>
		                          

     </section>

<?php
	
	 

	include('footer.php');
?>