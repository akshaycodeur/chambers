<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">


		
		<!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://google.com">    
    <link rel="shortcut icon" href="images/logo.png"> 
		<?php
			wp_head();
		?>
    
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
    <title>Yerriah Chambers</title>
  </head>
  <body>
    <div class="sectionTopstrip">
      <div class="container">
        <div class="row">
          <div class="col-md-12 topstrip">
            <div class="phonetop">
              <span class="call"></span>
              <a href="tel:+2302080429">(+230) 208 0429</a>
              <div class="socialiconstop">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebookwhite.png" alt="">
			</a>
                <a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedinwhite.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="sectionNavigation">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
		  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yerriahchamberslogo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#areaOfExpertise">Areas of expertise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutUs">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactUs">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>