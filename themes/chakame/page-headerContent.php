<?php
/*
Template Name: Header Content
*/
?>

<header dir="rtl" style="position: absolute;right: 40%;">
  <nav class="navbar navbar-expand-lg bg-wigth ">
    <div class="container blog-Navbar">
         <a  class="navbar-brand" href="#"> 
        <!-- <img src = "<?php echo get_template_directory_uri().'/assets/icons/NavbarLogoText.png';?>"> -->
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll blog-NavbarItems" style="--bs-scroll-height: 280px;">
          <li class="nav-item mx-lg-3 ">
              <a class="nav-link  " href="#" role="button">Home</a>
          </li>
          <li class="nav-item mx-lg-3">
              <a class="nav-link  "  href="#" role="button">Contact</a>
          </li>
           <li class="nav-item mx-lg-3">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
        </form>
      </div>
    </div>
  </nav>
</header>