
<?php
  require_once('php/connect.php');

  $sql = "select * from article where id = '".$_GET['id']."'";
  $result = $conn ->query($sql) or die($conn->error);
  if ($result->num_rows > 0){
  $row = $result->fetch_assoc();
  } else {
    header( 'location: blog.php' );
  }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['subject']; ?></title>


        
        <!-- Meta Tag -->
        <meta property="title" content="Buddy Trip บริการนำเที่ยวทั่วไทย">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta property="language" content="English">
        <meta property="author" content="Buddy Trip">
    
        <!-- COMMON TAGS -->
        <meta charset="utf-8">
        <!-- Search Engine -->
        <meta property="description" content="<?php echo $row['sub_title']; ?>">
        <meta property="image" content="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80">
        <meta property="keywords" content="นำเที่ยว,ไกด์ทัวร์,ท่องเที่ยว,travel,trip,thailand,ไทย">
        <meta property="robots" content="index, follow">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Buddy Trips บริการนำเที่ยวทั่วไทย">
        <meta itemprop="description" content="<?php echo $row['sub_title']; ?>">
        <meta itemprop="image" content="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta property="og:title" content="Buddy Trips บริการนำเที่ยวทั่วไทย">
        <meta property="og:description" content="<?php echo $row['sub_title']; ?>">
        <meta property="og:image" content="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80">
        <meta property="og:url" content="https://my-blog-32bf7.web.app/">
        <meta property="og:site_name" content="https://my-blog-32bf7.web.app/">
        <meta property="og:type" content="website">
    
    
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/image/favicons/site.webmanifest">
        <link rel="mask-icon" href="assets/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/image/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="assets/image/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    
        <!-- Css -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/Css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>



<body>
    

<!-- Nav Bar -->
    <?php include_once('include/navbar.php') ?>

<!-- Section Header -->
   
      <!-- Alternate: Background Image Parallax -->
      <header data-jarallax data-speed="0.4" class="jarallax img-cover" style="background-image: url('<?php echo $row['image']; ?>');">
            <div class="page-img">
              <h1 class="display-5 font-weight-bold"><?php echo $row['subject']; ?></h1>
              <p class="lead"><?php echo $row['sub_title']; ?></p>
            </div>
      </header>

<!-- Blog -->
      <section class="container blog-content">
          <div class="row">
              <div class="col-12">
                <?php echo $row['detail']; ?>
              </div>
              <div class="col-12">
                <hr>
                <p class="text-right text-muted"><?php  echo date_format(new datetime($row['update_at']),"j F Y"); ?></p>
                 <!-- Social Share -->
                 <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                 <hr>
              </div>
              


                <div class="col-12 text-muted text-center">
                    <h3>บทความที่เกี่ยวข้อง</h3>
                </div>

              <div class="col-12">
                <div class="owl-carousel owl-theme">
                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972560935" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972575526" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972588981" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972600380" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>
                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972654422" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972685180" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>

                  <section class="col-12 p-2">
                    <div class="card h-100">
                      <a href="#" class="warpper-card-img">
                        <img src="https://placeimg.com/600/400/nature?t=1632972634446" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">Some quick  consectetur adipisicing elit. Accusantium</p>
                      </div>
                        <div class="p-3">
                          <a href="#" class="badge badge-pill badge-info">more..</a>
                        </div>
                    </div>
                  </section>
              </div>

              <div class="col-12">
                <hr>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" 
                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=1538567759813517&autoLogAppEvents=1" 
                    nonce="bLVuoblI">
                </script>
                
                <div class="fb-comments" 
                    data-href="https://tripeverything.com/Blog/blog-detail.php?id=<?php echo $row['id']?>" 
                    data-width="100%" 
                    data-numposts="5">
              </div>
          </div>

      </section>








<!-- Footer -->
  <?php include_once 'include/footer.php' ?>

  <!-- To Top -->
  <div class="to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
  </div>




      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
      <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
      <script src="assets/js/main.js"></script>

      <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop:false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:false,
                        
                    }
                }
            });
          });
      </script>


      <!-- Social Share -->
      <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6157eb4a4ec3a20019789d08&product=inline-share-buttons' async='async'></script>
      
</body>
</html>