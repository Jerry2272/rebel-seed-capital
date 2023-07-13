<?php
/**
 * Contains the header.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>

    <!-- header_section -->
    <header>
    <nav class="navbar navbar-light fixed-top pt-0 p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="assets/image/rsc_logo.png" alt=""> </a>
        <button class="navbar-toggler  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa fa-bars" onclick="changeIcon(this)"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 animate_animated-fadeIn" style="animation: fadeIn 2s;">
            <li class="nav-item">
              <a class="nav-link active-nav" href="#" role="button" aria-expanded="false">
                About Us
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                Startups
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                 Investors
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                 Talents
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                 Contact Us
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
