
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Merriweather+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/logo.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="128x128" />
    <title>Soumya Work</title>
</head>

<body class="workpage">
  <?php

  $user = "root";
  $pass = "";
  $host = "localhost";
  $db = "db_portfolio";

  $conn = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($conn, 'utf8');
  if(!$conn){
  // echo "error";
  }
  else{
  // echo "connected";
  //   $myQuery = "SELECT about_desc FROM tbl_about";
  // $result = mysqli_query($conn, $myQuery);
}
  ?>

<h2 class="hidden">Work</h2>

    <div class="small visible-sm visible-xs">

        <div class="container">

          <nav class="navbar navbar-light row" style="background-color: #001a1f;">
              <img class="img-fluid col-xs-3 col-sm-2 col-md-2" src="images/desktop/logo.png" alt="Logo">
              <!-- <div type="button" class="col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8 hamButton"> -->

                <div type="button" data-dismiss="modal" class=" col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8" data-toggle="modal" data-target="#overlay"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>

                <!-- Modal -->
                <div id="overlay" class="modal fade"  >
                  <div class="modal-dialog"  >

                    <!-- Modal content-->
                      <ul class="row">
                          <li><a href="index.php"><h3>HOME</h3></a></li>
                          <li><a href="about.php"><h3>ABOUT</h3></a></li>
                          <li><a href="work.php"><h3>WORK</h3></a></li>
                          <li><a href="contact.php"><h3>CONTACT</h3></a></li>
                          <li data-dismiss="modal" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" data-dismiss="modal"></span></li>
                      </ul>
                  </div>
                </div>
          </nav>
        </div>
    </div>

    <!-- <div class="visible-lg visible-xl"> -->

    <!-- Side Wrapper -->
    <!-- <div id="wrapper"> -->
        <div id="sidebar-wrapper" class="visible-lg visible-xl visible-md hide-sm hide-xs">
            <ul class="sidebar-nav visible-lg visible-xl visible-md ">
                <li><img src="images/desktop/logo.png" alt="Logo"></li>
                <div class="navigation">
                    <a href="index.php">HOME</a>
                    <a href="about.php">ABOUT</a>
                    <a href="work.php">WORK</a>
                    <a href="contact.php">CONTACT</a>
                </div>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container ">
                    <div class="row  gallery">
                        <h1 class=" col-lg-6 col-xl-6 col-md-10 col-sm-10 col-xs-10 col-lg-offset-3 col-xl-offset-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ">My Portfolio <span>Gallery</span></h1>
                    </div>
                    <div class="row">
                      <div class=" galleryButton ">
                        <div class="wb col-lg-2 col-xl-2 col-md-3 col-lg-offset-3 col-xl-offset-3 col-md-offset-2">Web Development</div>
                        <div class="db col-lg-2 col-xl-2 col-md-3  ">Design</div>
                        <div class="vb col-lg-2 col-xl-2 col-md-3 ">3-D and Video</div>
                      </div>
                    </div>
                    <!-- <div class="row">
                    col-lg-8 col-xl-8 col-lg-offset-2 col-xl-offset-2
                     col-xs-10 col-sm-10 col-md-10  col-md-offset-1
                      <div class="visible-xs visible-sm visible-md galleryButtonS">
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" class="wb">Web Development</h3>
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered" class="db">Design</h3>
                        <h3 class="col-xs-8 col-sm-8 col-md-8 centered"  class="vbs">3D and Video</h3>
                      </div>
                    </div> -->

<!-- Lightbox -->
<div id="lightbox" class=" modal light fade"  >
<div class="row">
<div class="col-lg-2 col-xl-2 col-lg-offset-10 col-xl-offset-10  col-xs-2 col-sm-1 col-md-1 col-xs-offset-10 col-sm-offset-11 col-md-offset-11"><i class="fa fa-times" data-dismiss="modal" aria-hidden="true"></i>
</div>
</div>
<div class="row">
    <div class="modal-content">
      <div class="col-lg-6 col-xl-6 col-md-6 col-xs-8 col-sm-8 col-lg-offset-3 col-xl-offset-3 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">


<div class="imgtag img-responsive">
  <img src="" alt="" class="dev-image"></img>
  <img src="" alt="" class="vid-image"></img>
</div>
<br>
<p class="dev-desc"></p>
<p class="vid-desc"></p></div>
    </div>
  </div>
</div>

<div id="lightbox2" class=" modal light fade"  >
<div class="row">
<div class="col-lg-2 col-xl-2 col-lg-offset-10 col-xl-offset-10  col-xs-2 col-sm-1 col-md-1 col-xs-offset-10 col-sm-offset-11 col-md-offset-11"><i class="fa fa-times" data-dismiss="modal" aria-hidden="true"></i>
</div>
</div>
<div class="row">
    <div class="modal-content">
      <div class="col-lg-6 col-xl-6 col-md-6 col-xs-6 col-sm-6 col-lg-offset-3 col-xl-offset-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">


<div class="imgtag">
<video src"" class="video responsive vid" autoplay muted controls preload="none"></video>

</div>
<br>
<p class="vid-desc"></p></div>
    </div>
  </div>
</div>

<!-- End -->
<div class="webGallery">
  <div class="row imgs">
    <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8 col-md-offset-3 col-lg-offset-2 col-xl-offset-2" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
 <?php
      $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '1'";
      $dev_thumb = mysqli_query($conn, $thumb);
      while ($row = $dev_thumb->fetch_assoc()) {
          $file = $row['dev_thumb'];
      }
      ?>
      <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file ?>" id="1">


    </div>

    <div class="galleryImage col-xs-6 col-sm-6  col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
      <?php
           $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '2'";
           $dev_thumb = mysqli_query($conn, $thumb);
           while ($row = $dev_thumb->fetch_assoc()) {
               $file = $row['dev_thumb'];
           }
           ?>
      <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file ?>" id="2">

     </div>

     <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
       <?php
            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '3'";
            $dev_thumb = mysqli_query($conn, $thumb);
            while ($row = $dev_thumb->fetch_assoc()) {
                $file = $row['dev_thumb'];
            }
            ?>

       <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="3">
      </div>
      <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">

        <?php
             $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '4'";
             $dev_thumb = mysqli_query($conn, $thumb);
             while ($row = $dev_thumb->fetch_assoc()) {
                 $file = $row['dev_thumb'];
             }
             ?>
        <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="4">
       </div>

</div>
                      </div>

                      <div class="videoGallery">
                        <div class="row imgs">
                          <div class="galleryImage col-md-6 col-lg-6 col-xl-8 col-md-offset-2 col-lg-offset-2 col-xl-offset-2">
                            <?php
                                 $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '5'";
                                 $dev_thumb = mysqli_query($conn, $thumb);
                                 while ($row = $dev_thumb->fetch_assoc()) {
                                     $file = $row['dev_thumb'];
                                 }
                                 ?>
                            <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="5"  data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
<?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '11'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
 <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="11" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">
 <?php
 $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '16'";
 $dev_thumb = mysqli_query($conn, $thumb);
 while ($row = $dev_thumb->fetch_assoc()) {
     $file = $row['dev_thumb'];
 }
 ?>
 <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="16" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">

                          </div>

                          <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '6'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="6" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '13'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="13" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '15'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="15"  data-dismiss="modal" data-toggle="modal" data-target="#lightbox">

                           </div>

                           <div class="galleryImage col-md-8 col-lg-8 col-xl-8  ">
                             <?php
                             $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '7'";
                             $dev_thumb = mysqli_query($conn, $thumb);
                             while ($row = $dev_thumb->fetch_assoc()) {
                                 $file = $row['dev_thumb'];
                             }
                             ?>
                             <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="7" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">
                             <?php
                             $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '10'";
                             $dev_thumb = mysqli_query($conn, $thumb);
                             while ($row = $dev_thumb->fetch_assoc()) {
                                 $file = $row['dev_thumb'];
                             }
                             ?>

                             <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="10" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">

                             <!-- <img style="width:100%" class="hover-shadow gallery vidThumb" src="images/gallery/thumbnails/chess.jpg" id="14" data-target="#lightbox" data-dismiss="modal" data-toggle="modal"> -->
                             <?php
                             $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '17'";
                             $dev_thumb = mysqli_query($conn, $thumb);
                             while ($row = $dev_thumb->fetch_assoc()) {
                                 $file = $row['dev_thumb'];
                             }
                             ?>
                             <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="17" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">

                            </div>
                            <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8 ">
                              <?php
                              $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '8'";
                              $dev_thumb = mysqli_query($conn, $thumb);
                              while ($row = $dev_thumb->fetch_assoc()) {
                                  $file = $row['dev_thumb'];
                              }
                              ?>
                              <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                              <?php
                              $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '12'";
                              $dev_thumb = mysqli_query($conn, $thumb);
                              while ($row = $dev_thumb->fetch_assoc()) {
                                  $file = $row['dev_thumb'];
                              }
                              ?>
                                <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="12" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                                <?php
                                $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '9'";
                                $dev_thumb = mysqli_query($conn, $thumb);
                                while ($row = $dev_thumb->fetch_assoc()) {
                                    $file = $row['dev_thumb'];
                                }
                                ?>
                                <img style="width:100%" class="hover-shadow gallery vidThumb" src="<?php echo $file?>" id="9" data-target="#lightbox2" data-dismiss="modal" data-toggle="modal">

                             </div>

                      </div>
                    </div>

                    <div class="desGallery">
                      <div class="row imgs">
                        <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8 col-md-offset-2 col-lg-offset-2 col-xl-offset-2" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                          <?php
                          $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '18'";
                          $dev_thumb = mysqli_query($conn, $thumb);
                          while ($row = $dev_thumb->fetch_assoc()) {
                              $file = $row['dev_thumb'];
                          }
                          ?>
                          <img style="width:100%" class="hover-shadow gallery devThumb " src="<?php echo $file?>" id="18">
                          <?php
                          $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '19'";
                          $dev_thumb = mysqli_query($conn, $thumb);
                          while ($row = $dev_thumb->fetch_assoc()) {
                              $file = $row['dev_thumb'];
                          }
                          ?>
                            <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="19">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '24'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="24">




                        </div>

                        <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                          <?php
                          $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '25'";
                          $dev_thumb = mysqli_query($conn, $thumb);
                          while ($row = $dev_thumb->fetch_assoc()) {
                              $file = $row['dev_thumb'];
                          }
                          ?>
                          <img style="width:100%" class="hover-shadow gallery devThumb " src="<?php echo $file?>" id="25">
                          <?php
                          $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '23'";
                          $dev_thumb = mysqli_query($conn, $thumb);
                          while ($row = $dev_thumb->fetch_assoc()) {
                              $file = $row['dev_thumb'];
                          }
                          ?>
                          <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="23">
                          <?php
                          $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '26'";
                          $dev_thumb = mysqli_query($conn, $thumb);
                          while ($row = $dev_thumb->fetch_assoc()) {
                              $file = $row['dev_thumb'];
                          }
                          ?>
                          <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="26">

                         </div>

                         <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                           <?php
                           $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '21'";
                           $dev_thumb = mysqli_query($conn, $thumb);
                           while ($row = $dev_thumb->fetch_assoc()) {
                               $file = $row['dev_thumb'];
                           }
                           ?>
                           <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="21">
                           <?php
                           $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '22'";
                           $dev_thumb = mysqli_query($conn, $thumb);
                           while ($row = $dev_thumb->fetch_assoc()) {
                               $file = $row['dev_thumb'];
                           }
                           ?>
                             <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="22">
                          </div>

                          <div class="galleryImage col-xs-6 col-sm-6 col-md-6 col-lg-8 col-xl-8" data-dismiss="modal" data-toggle="modal" data-target="#lightbox">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '27'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="27">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '20'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="20">
                            <?php
                            $thumb = "SELECT dev_thumb FROM `tbl_work` WHERE work_id = '28'";
                            $dev_thumb = mysqli_query($conn, $thumb);
                            while ($row = $dev_thumb->fetch_assoc()) {
                                $file = $row['dev_thumb'];
                            }
                            ?>
                            <img style="width:100%" class="hover-shadow gallery devThumb" src="<?php echo $file?>" id="28">


                           </div>

                    </div>
                                          </div>


                            </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div> -->

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>
-->
<!-- <script src="js/gallery.js" type="text/javascript"></script> -->
<script src="js/video.js" type="text/javascript"></script>
<script src="js/dev.js" type="text/javascript"></script>
<!-- <script src="js/vidjs.js" type="text/javascript"> -->

</script>
<script src="js/work.js" type="text/javascript"></script>

</body>

</html>
