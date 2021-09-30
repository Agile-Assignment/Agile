<?php
     session_start();
     include('connection.php');
     $result = mysqli_query($db, "SELECT * FROM gametable") or die( mysqli_error($db));

     $new = mysqli_fetch_assoc($result);
     mysqli_free_result($result);

     if(isset($_SESSION['status'])){
          if($_SESSION['status'] == true)	
               include('headerUser.php');
          else
          include('header.php');
     }
     else
          include('header.php');
     ?>


          <!-- HOME -->
          <section id="home">
               <div class="row">
                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>
                                             <?php
                                                  echo "$new[gameName]";
                                             ?>
                                             </h1>
                                             <h3>
                                                  <?php
                                                  echo "$new[publisherName]";
                                             ?>
                                             </h3>
                                             <a href="blog.php" class="section-btn btn btn-default">Details</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Testing2</h1>
                                             <h3>Testing2</h3>
                                             <a href="blog.php" class="section-btn btn btn-default">Details</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Testing3</h1>
                                             <h3>Testing3</h3>
                                             <a href="blog.php" class="section-btn btn btn-default">Details</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

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
               <section>
                    <div class="container">
                         <div class="row">
                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title text-center">
                                        <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
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