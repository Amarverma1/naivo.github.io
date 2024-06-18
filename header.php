<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--- primary meta tag-->
  <title>NaivoTech - Virtual Innovation Lab</title>
  <meta name="title" content="NaivoTech - The Best Program to Enroll for Exchange">
  <meta name="description" content="">




  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top" onload="myFunction()" style="margin:0;">
  <!--LOADER-->
    <div class="letter-container" id="loader">
      <div class="letter-n">
          <div class="vertical left"></div>
          <div class="diagonal"></div>
          <div class="vertical right"></div>
      </div>
  </div>



  <!-- 
    - #HEADER
  -->
  <div style="display:none;" id="myDiv" class="animate-bottom">


    <header class="header" data-header>
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/transparentImage.png" width="162" height="50" alt="NaivoTech logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="wrapper">
            <a href="#" class="logo">
              <img src="./assets/images/transparentImage.png" width="162" height="50" alt="VIL logo">
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#top-skills" class="navbar-link" data-nav-link>Courses</a>
            </li>

            <li class="navbar-item">
              <a href="#about" class="navbar-link" data-nav-link>About</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>

            <li class="navbar-item">
              <a href="#Contact" class="navbar-link" data-nav-link>Contact</a>
            </li>

          </ul>

        </nav>

        <div class="header-actions">
          <!-- <li class="navbar-item">
          <h2 class="iam">I'm</h2>
        </li>-->

          <!-- <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>-->

          <!-- <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>-->

          <a href="login.html" class="btn has-before" id="openLoginFormBtn">
            <span class="span">Students</span>

            <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
          </a>

          <a href="educators.html" class="btn has-before" id="openLoginFormBtn">
            <span class="span">Educators</span>

            <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
          </a>

          <a href="school.html" class="btn has-before" id="openLoginFormBtn">
            <span class="span">School</span>

            <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
          </a>

          <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
    </header>

