

<!-- Parallax Footer -->

<section class="jarallax position-relative py-5" data-jarallax data-speed="0.4"  style="background-image: url('https://cdn.pixabay.com/photo/2016/02/18/22/33/road-1208298_960_720.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-12 text-white text-center">
              <i class="fas fa-dog fa-3x"></i>
              <h1 class="display-5 font-weight-bold">All About Travel</h1>
              <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
              <div class="star-rating">
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
                <div class="star-current" style="width: 70%;">
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>

      

<!-- Footer -->
<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>

<footer class="semi-footer p-3 text-center text-md-left">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand text-white" href="index.php">
            <i class="fas fa-paw"></i>
            Buddy Trip
          </a>
          <div class="line1"></div>
         
          <P class="margintop-footer">
            <i class="fas fa-phone-square-alt"></i>  088-888888 <br>
            <i class="far fa-envelope"></i> Email contact@buddytrip.com <br>
            <i class="fas fa-home"></i> 15/15 Chatuchak,Bangkok 10900
          </P>
          <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
        </div>

        <div class="col-md-4">
          <ul class="navbar-nav text-center">
            <h4>Menu</h4>
            <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>">
            <a class="nav-link" href="blog.php">Blog</a>   
            </li>
            <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
            <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item <?php echo $file_name == 'contact' ? 'active' : '' ?>">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        </div>

        <div class="col-md-4">
          <h4>Map</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6106.53730636182!2d100.58844720080789!3d13.793741966309906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dc661d541c5%3A0xcc98af602b250112!2sThe%20Niche%20Ladprao%2048!5e0!3m2!1sth!2sth!4v1630560465764!5m2!1sth!2sth" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>

    </footer>

      <footer class="footer">
        <span>
          copyright @ 20222 <a href="https://www.facebook.com" target="_blank">Buddy Trip</a> All rights reserved
        </span>        
      </footer>