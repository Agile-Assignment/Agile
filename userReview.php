
<!-- user review -->


<section>
	<div class="container" id="userReview">	
	<h4> 
		<!-- user who added the review. take username  -->
		<h4 class="fa fa-user"> Reviewer:</h4> <?= $user; ?>&nbsp;&nbsp;&nbsp;
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
			echo "$rating";
		?>
		<!-- Rating of the review. Star codeing  -->
		
		<?php
		for( $x = 0; $x < 5; $x++ )
		{
			if( floor( $rating )-$x >= 1 ) //rating in int 
			{ echo '<i class="fa fa-star"></i>'; } //gold star picture
			else
			{ echo '<i class="fa fa-star-o"></i>'; } //black star picture
		}
		?>
		
		<br>
		
		<!-- textarea of the review. take rating textarea from blog.php? -->
		<p>
		<?php
			echo "$message";
		?>
		</p>
		
    </h4>
	
	</div>

</section>

