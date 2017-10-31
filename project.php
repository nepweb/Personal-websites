

<?php
session_start();
include_once 'admin/include/connection.php';

$sel ="SELECT * from banner order by last_insert desc limit 1";
$result = @mysqli_query($link,$sel);
$banner = @mysqli_fetch_assoc($result);


$query ="SELECT name from settings";
$result = @mysqli_query($link,$query);
$siteTitle = @mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Personal Sites</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".menu-link">
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
    </script>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home"><?= $siteTitle['name'];?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse menu-link" id="bs-example-navbar-collapse-1">
      
          
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#about">About</a></li>
             
              <li><a href="#contact">Contact</a></li>
            
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->
       <!-- /.navbar -->
    <div class="banner" id="home">
     
          <div class=" text-center">
             <div class="content" style="background-image: url(admin/images/banner/<?= $banner['image'] ?>)">

                <div class="content--text">
                  <h5><?= $banner['title'] ?></h5>
              <h1><?= $banner['title_desc'] ?></h1>

              <a class="btn" href="#">Tell Me more</a>
                </div>
             </div>   

          </div>
          <!-- /.col-md-12 -->
     
    </div>
    
   

    <div class="portfolio" id="portfolio">
      <div class="header">
          <h3>Portfolio</h3>
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
        </div>
        <!-- /.header -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="filters">
                <div class="ui-group">
                 <div class="button-group js-radio-button-group" data-filter-group="portfolio">
                    <button class="btn is-checked" data-filter="">All</button>
                    <button class="btn" data-filter=".design">Wedesign</button>
                    <button class="btn" data-filter=".graphic">Graphic Design</button>
                    <button class="btn" data-filter=".development">Web Development</button>
                  </div>
                </div>
                <!-- /.ui-group -->
              </div>
              <!-- /.filters -->

              <div class="grid">
                 
                <div class="row">
                   <div class="col-md-3 design">
                      <div class="content">
                          <img src="images/image1.jpg" alt="" class="img-responsive">

                            <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                   <div class="col-md-3 graphic">
                     <div class="content"><img src="images/image2.jpg" alt="" class="img-responsive">
                         <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                     </div>
                   </div>
                   <div class="col-md-3 development">
                      <div class="content"><img src="images/image3.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                   <div class="col-md-3 development">
                      <div class="content"><img src="images/image6.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                   <div class="col-md-3 graphic">
                      <div class="content"><img src="images/image5.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                   <div class="col-md-3 design">
                      <div class="content"><img src="images/image4.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                    <div class="col-md-3 design">
                      <div class="content"><img src="images/image4.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                    <div class="col-md-3 design">
                      <div class="content"><img src="images/image4.jpg" alt="" class="img-responsive">
                           <div class="text">
                                <h4>Project Name</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            </div>
                      </div>
                   </div>
                </div>
                <!-- /.row -->
              </div> 
              <!-- /.grid -->
          </div>
            <!-- /.col-md-12 -->
        </div>
      <!-- /.row -->
       </div>
      <!-- /.container -->
    </div>
    <!-- /.portfolio -->

    <div class="about" id="about">
        <div class="header">
          <h3>About</h3>
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
        </div>
       <!-- /.header -->
       <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
              </p>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
       </div>
       <!-- /.container -->
    </div>
    <!-- /.about -->
    
    <div class="contact" id="contact">
      <div class="header">
        <h3>Contact Us</h3>
        <h5>Lorem ipsum dolor sit amet consectetur.</h5>
      </div>
      <!-- /.header -->

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">

          <?php
            if(isset($_SESSION['msg1'])){
              echo "<div class='alert alert-success'>".$_SESSION['msg1']."</div>"; 
              unset($_SESSION['msg1']);
            }

            if(isset($_SESSION['err1'])){
              echo "<div class='alert alert-danger'>".$_SESSION['err1']."</div>"; 
              unset($_SESSION['err1']);
            }


          ?>


            <form action="act_contact.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fid">First Name</label>
                    <input type="text" class="form-control"  name="fname" id="fid" placeholder="First Name">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                    <label for="lid">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lid" placeholder="Last Name">
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <div class="form-group">
                <label for="eid">Email Address</label>
                <input type="email" name="email" placeholder="Emai Address" class="form-control">
              </div>

              <div class="form-group">
                <label for="sub">Subject</label>
                 <input type="text" name="subject" placeholder="subject" class="form-control">
              </div>

              <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" class="form-control" rows=7 placeholder="Enter Your Message"></textarea>
              </div>

              <div class="form-group">
                <button type="submit" name="btn_submit" class="btn">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.contact -->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>General</h2>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Portfolio</a></li>
             
              <li><a href="#">About</a></li>
            </ul>
          </div>  
          <div class="col-md-3">
            <h2>About Company</h2>
            <ul>
              <li><a href="#">Testimonial</a></li>
              <li><a href="#">F.A.Q.s</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>  
          <div class="col-md-5">
            <div class="fb-page" data-href="https://www.facebook.com/bookmandu" data-tabs="timeline" data-width="400" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bookmandu"><a href="https://www.facebook.com/bookmandu">Bookmandu</a></blockquote></div></div>
          </div>
        </div>
        <div class="row copyright">
          <p>Copyright <i class="fa fa-copyright"></i> 2016-2017. Ashish Subedi &reg; </p>
        </div>
      </div>

    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>