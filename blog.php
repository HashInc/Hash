<!DOCTYPE html>
<head>
   <!-- Basic Page Needs -->
   <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
   <title>HashInclude | Remember The Name</title>
   <?php 
		$number = rand(1, 10);
	?>
	<style>
		.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url("images/loader-64x/Preloader_<?php echo $number ?>.gif") center no-repeat #fff;
}
</style>

   <!-- Mobile Specific Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- Bootstrap  -->
   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

   <!-- Colors -->
   <link rel="stylesheet" type="text/css" href="stylesheets/colors/color4.css" id="colors">
   
   <!-- Animation Style -->
   <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

   <!-- Favicon and touch icons  -->
   <link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
   <link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
   <link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
   <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
   <link href="icon/favicon.png" rel="shortcut icon">

   <!--[if lt IE 9]>
      <script src="javascript/html5shiv.js"></script>
      <script src="javascript/respond.min.js"></script>
   <![endif]-->
</head>

<body>
   <!-- Top -->
      <div class="se-pre-con"></div>
   <div class="top">
      <div class="container">
         <div class="row">
            <div class="span8">
               <ul class="contact-info inline pull-left">
                  <li class="email"><a href="#">hashinc16@gmail.com</a></li>
               </ul>
            </div><!-- /.span8 -->
            </div><!-- /.row -->
      </div><!-- /.containter -->
   </div>

   <!-- Parallax Fullwidth -->
   <div id="page-slider" class="parallax-bg7 parallax">
      <div class="overlay"></div>
      <header id="header" class="header">
         <div class="header-wrap">
            <div class="container">
               <div class="row">
                  <div class="span2">
                     <div id="logo" class="logo">
                        <a href="./" rel="home">
                           <img src="images/logo.png" alt="Hash Include" />
                        </a>
                     </div><!-- /.logo -->
                  </div><!-- /.span2 -->
                  <div class="span10">
                     <div class="btn-menu"></div><!-- //mobile menu button -->
                     <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                           <li><a href="index.php">Home</a>
                           <li><a href="about.php">About Us</a>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="portfolio.php">Our Work</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a class="active" href="#">YOUR STORE</a></li>
                        </ul><!-- /.menu -->
                     </nav>
                  </div><!-- /.span10 -->
               </div><!-- /.row -->
            </div><!-- /.container -->
         </div><!-- /.header-wrap -->
      </header>
   </div>

   <!-- Page Title -->
   <section class="page-title-container">
   	<div class="container page-title">
   		<div class="page-title-wrapper">
			   <div class="span6 page-title-captions">
			   	<h1>Blog</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="index.php">Home </a>/</li>
					<li><a href="blog.php">Blog </a>/</li>
					</ul>
			   </div><!-- /.span6 -->
         </div>
      </div><!-- /.container -->
   </section>

   <!-- Blog Posts -->
   <section class="section blog-posts" style="background-color: #10101d">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox Hash Include-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
                  <h2 class="subtitle text-white">Blog</h2>
                  <h1 class="maintitle text-color">GRAPHICAL NEWS</h1>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus lorem a ipsum tempus, at molestie erat pellentesque. Nulla non diam mollis, luctus orci mattis, ullamcorper massa.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="container">
         <div class="posts-wrap">
            <ul class="post-filter v2 inline">
               <li class="active"><a data-filter="*" href="#">All</a></li>
               <li><a data-filter=".popular" href="#">Popular</a></li>
               <li><a data-filter=".branding" href="#">Branding</a></li>
               <li><a data-filter=".editorial" href="#">Editorial</a></li>
               <li><a data-filter=".illustration" href="#">Illustration</a></li>
               <li><a data-filter=".webdesign" href="#">Web Design</a></li>
            </ul><!-- /.post-filter -->
            <div class="posts-container Hash Include-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
               <div class="item post-item popular editorial">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g1.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra.</p>
                  </div>
               </div><!-- /.post-item -->
               <div class="item post-item webdesign">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g2.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra.</p>
                  </div>
               </div><!-- /.post-item -->
               <div class="item post-item w2 branding illustration">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g3.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra. Duis ut viverra nisl. In hac habitasse platea dictumst. Sed a molestie tellus. Etiam fringilla mi ipsum, et commodo massa dapibus sit amet.</p>
                  </div>
               </div><!-- /.post-item -->
               <div class="item post-item w2 branding illustration popular">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g4.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra. Duis ut viverra nisl. In hac habitasse platea dictumst. Sed a molestie tellus. Etiam fringilla mi ipsum, et commodo massa dapibus sit amet.</p>
                  </div>
               </div><!-- /.post-item -->
               <div class="item post-item editorial illustration">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g5.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra.</p>
                  </div>
               </div><!-- /.post-item -->
               <div class="item post-item editorial webdesign illustration">
                  <div class="featured-post">
                    <a href="blog-single.php">
                      <div class="overlay">
                        <div class="link">
                          <div class="icon-bg"></div>
                          <div class="icon">
                             <i class="icons-link"></i>
                          </div>
                        </div>
                      </div>
                      <img src="images/blog/g6.jpg" alt="image">
                    </a>
                  </div>
                  <div class="content-post">
                    <h2><a href="blog-single.php">LOREM IPSUM DOLAR SIT AMET</a></h2>
                    <p>Nam sed leo faucibus, pellentesque lacus ultrices, ultricies orci. Phasellus sagittis massa vel turpis convallis viverra.</p>
                  </div>
               </div><!-- /.post-item -->
            </div><!-- /.posts-container -->
           <div class="loadmore-btn loadmore-post">
              <a href="#" class="btn-Hash Include border-type">LOAD MORE</a>
           </div><!-- /.loadmore-btn -->
         </div><!-- /.posts-wrap -->
      </div><!-- /.container -->
   </section>

 <!-- Socials -->
   <section class="section social-section" style="padding: 50px 0; background: #d9dff2">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="socials-list Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.5s" data-animation-offset="90%">
                  <div class="follow-us">
                     <center><h2><strong>Follow Us</strong></h2></center>
                  </div>
                  <div class="social-icons">
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-twitter"></i>
                           </div>
                        </div>
                     </a>
                     <a class="iconwrap" href="https://www.facebook.com/HashIncludeofficial/?fref=nf">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-facebook"></i>
                           </div>
                        </div>
                     </a>
                         <a class="iconwrap" href="https://www.youtube.com/channel/UCWnwjz_S9RTms3K10NdkyTA">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-youtube"></i>
                           </div>
                        </div>
                     </a>
                     
                     <a class="iconwrap" href="https://plus.google.com/u/0/105532434800273536097">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-google-plus"></i>
                           </div>
                        </div>
                     </a>
                     </div>
               </div><!-- /.socials-list -->
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>
   <!-- Bottom -->
   <div class="bottom">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="copyright pull-left">
                  <span><a href="www.hashinc.in">HashInclude</a></span> &copy 2016 | ALL RIGHTS RESERVED.
               </div>
               <div class="bottom-links pull-right">
                  <a href="index.php">HOME</a> |
                  <a href="about.php">ABOUT US</a> |
                  <a href="services.php">SERVICES</a> |
                  <a href="portfolio.php">OUR WORK</a> |
                  <a href="contact.php">CONTACT</a> |
                  <a href="#">BLOG</a>
               </div>
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </div>

   <!-- Go Top -->
   <a class="go-top">
      <i class="icons-angle-up"></i>
   </a>
   
   <!-- Javascript -->
   <script type="text/javascript" src="javascript/jquery.min.js"></script>
   <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.easing.js"></script>
   <script type="text/javascript" src="javascript/matchMedia.js"></script>
   <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
   <script type="text/javascript" src="javascript/jquery.bxslider.js"></script>
   <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
   <script type="text/javascript" src="javascript/parallax.js"></script>
   <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
   <script type="text/javascript" src="javascript/jquery.sticky.js"></script>
   <script type="text/javascript" src="javascript/smoothscroll.js"></script>
   <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
   <script type="text/javascript" src="javascript/switcher.js"></script>
   <script type="text/javascript" src="javascript/main.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
</body>

</html>