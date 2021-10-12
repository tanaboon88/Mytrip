<!-- Nav Bar -->
<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <!-- <img src="assets/image/Tripp.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
                <i class="fas fa-paw fa-lg"></i>
                Buddy Trip
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center lead font-weight-bold">
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
        </div>
    </nav>