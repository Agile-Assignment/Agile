<?php
	include('header.php');
?>


     <section>
          <div class="container">
               <h2>Game Name</h2>

               <p class="lead">
                    <i class="fa fa-user"></i> Username who added the game : Testing &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-calendar"></i> 12/06/2020 10:30 &nbsp;&nbsp;&nbsp;
               </p>

               <img src="images/other-image-fullscreen-1-1920x700.jpg" class="img-responsive" alt="">

               <br>

               <h3>Publisher</h3>
               <p>Name </p>

               <h3>Year of the Release</h3>
               <p>Year </p>

			   <h3>Description</h3>
			   <p>Details of the game</p>



               <br>


               <br>

               <div class="row">
                    <div class="col-md-4 col-xs-12 pull-right">
                         <h4>Social share</h4>

                         <p>
                              <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;

                              <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;

                              <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </p>

                         <br>



                    </div>

                    <div class="col-md-8 col-xs-12">
                         <h4>Comments</h4>

                         <p>No comments found.</p>

                         <br>
                         
                         <h4>Leave a Comment</h4>

                         <form action="#" class="form">

                              <div class="row">
                                   <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                             <label class="control-label">Name</label>

                                             <input type="text" name="name" class="form-control">
                                        </div>
                                   </div>

                                   <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                             <label class="control-label">Email</label>

                                             <input type="email" name="email" class="form-control">
                                        </div>
                                   </div>
                              </div>

                              <div class="form-group">
                                   <label class="control-label">Message</label>

                                   <textarea name="comment" class="form-control" rows="10" autocomplete="off"></textarea>
                              </div>

                              <button type="submit" class="section-btn btn btn-primary">Submit</button>
                         </form>
                    </div>
               </div>
          </div>
     </section>

<?php
	include('footer.php');
?> 