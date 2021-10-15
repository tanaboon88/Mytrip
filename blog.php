

<?php
  require_once('php/connect.php');

  $sql = "select * from article";
  $result = $conn ->query($sql) or die($conn->error);
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>


        <!-- Meta Tag -->
        <meta name="title" content="Buddy Trip บริการนำเที่ยวทั่วไทย">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="Buddy Trip">
    
        <!-- COMMON TAGS -->
        <meta charset="utf-8">
        <!-- Search Engine -->
        <meta name="description" content="บริการนำเที่ยว จัดสัมมนา จัดกรุ๊ปเที่ยวส่วนตัว ดูงาน นำปั่นจักรยานทั้งในและต่างประเทศ ล่องเรือสำราญ เพื่อเป็นการส่งเสริมการท่องเที่ยวในประเทศ เพิ่มประสบการณ์ของนักท่องเที่ยว">
        <meta name="image" content="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1139&q=80">
        <meta name="keywords" content="นำเที่ยว,ไกด์ทัวร์,ท่องเที่ยว,travel,trip,thailand,ไทย">
        <meta name="robots" content="index, follow">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Buddy Trips บริการนำเที่ยวทั่วไทย">
        <meta itemprop="description" content="บริการนำเที่ยว จัดสัมมนา จัดกรุ๊ปเที่ยวส่วนตัว ดูงาน นำปั่นจักรยานทั้งในและต่างประเทศ ล่องเรือสำราญ เพื่อเป็นการส่งเสริมการท่องเที่ยวในประเทศ เพิ่มประสบการณ์ของนักท่องเที่ยว">
        <meta itemprop="image" content="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1139&q=80">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="Buddy Trips บริการนำเที่ยวทั่วไทย">
        <meta name="og:description" content="บริการนำเที่ยว จัดสัมมนา จัดกรุ๊ปเที่ยวส่วนตัว ดูงาน นำปั่นจักรยานทั้งในและต่างประเทศ ล่องเรือสำราญ เพื่อเป็นการส่งเสริมการท่องเที่ยวในประเทศ เพิ่มประสบการณ์ของนักท่องเที่ยว">
        <meta name="og:image" content="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1139&q=80">
        <meta name="og:url" content="https://my-blog-32bf7.web.app/">
        <meta name="og:site_name" content="https://my-blog-32bf7.web.app/">
        <meta name="og:type" content="website">
    
    
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
        <link rel="stylesheet" href="assets/Css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>



<body>
    

<!-- Nav Bar -->
    <?php include_once('include/navbar.php') ?>

<!-- Section Header -->
   
            <!-- Alternate: Background Image Parallax -->
            <header data-jarallax data-speed="0.4" class="jarallax img-cover" style="background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
              <div class="page-img">
                <h1 class="display-5 font-weight-bold">รวบรวมสถานที่ท่องเที่ยวในประเทศไทย</h1>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint consectetur nulla. </p>
              </div>
            </header>

<!-- Section BLog -->
      <section class="container py-5">
        <div class="row pb-5">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all"> 
                      <button class="btn btn-outline-info active">ทั้งหมด</button>
                    </a>
                      <button class="btn btn-outline-info">เชียงใหม่</button>
                      <button class="btn btn-outline-info">ภูเก็ต</button>
                      <button class="btn btn-outline-info">พัทยา</button>
                      <button class="btn btn-outline-info">กรุงเทพฯ</button>
                      <button class="btn btn-outline-info">หัวหิน</button>

                </div>
            </div>
        </div>

        <div class="row">

          <?php while($row = $result->fetch_assoc()){?> 
            <section class="col-6 col-md-4 col-lg-3 p-2">
              <div class="card h-100">
                <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                  <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold"><?php echo $row['subject'] ?></h5>
                  <p class="card-text"><?php echo $row['sub_title'] ?></p>
                </div>
                  <div class="p-3">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="badge badge-pill badge-info">more..</a>
                  </div>
              </div>
            </section>
            <?php } ?>
  


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
      <script src="assets/js/main.js"></script>
</body>
</html>