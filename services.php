<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>HashInclude | Your Web Developer</title>
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
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
   <link rel="stylesheet" type="text/css" href="stylesheets/colors/color4.css" id="colors">
   <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
   <link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
   <link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
   <link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
   <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
   <link href="icon/favicon.png" rel="shortcut icon">
</head>

<body>
   <div class="se-pre-con"></div>
   <div class="top">
      <div class="container">
         <div class="row">
            <div class="span8">
               <ul class="contact-info inline pull-left">
                  <li class="email"><a href="#">hashinc16@gmail.com</a></li>
               </ul>
            </div>           
         </div>
      </div>
   </div>
   <div id="page-slider" class="parallax-bg7 parallax">
      <div class="overlay"></div>
      <header id="header" class="header">
         <div class="header-wrap">
            <div class="container">
               <div class="row">
                  <div class="span2">
                     <div id="logo" class="logo">
                        <a href="./" rel="home">
                           <img src="images/logo.png" alt="Hashinc" />
                        </a>
                     </div>
                  </div>
                  <div class="span10">
                     <div class="btn-menu"></div>
                     <nav id="mainnav" class="mainnav">
						<ul class="menu">
                           <li><a href="index.php">Home</a>
                           <li><a href="about.php">About Us</a>
                           <li><a class="active" href="#">Services</a></li>
                           <li><a href="portfolio.php">Our Work</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a href="blog.php">Blog</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>

   <!-- Page Title -->
   <section class="page-title-container">
   	<div class="container page-title">
   		<div class="page-title-wrapper">
			   <div class="span6 page-title-captions">
			   	<h1>Services</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="index.php">Home </a>/</li>
					<li><a href="services.php">Services </a>/</li>
					</ul>
			   </div><!-- /.span6 -->
         </div><!-- /.row -->
      </div><!-- /container -->
   </section>

   <!-- Services -->
   <section class="section entry-post" style="background-color: #10101d">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox">
                  <h2 class="subtitle text-white">Services</h2>
                  <h1 class="maintitle text-color">A FEW INTERESTING FACTS ABOUT US</h1>
                  <p class="text-white">We provide different types of services with regards to Graphics and IT solutions.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
            <div class="span3">
               <div class="iconbox v2 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-lightbulb"></i>
                     </div>
                  </div>
                  <h3><a href="#">Web Development</a></h3>
                  <p>In this digital world everyone wants to multiply or own a business. Since half of world's population have the access the internet as per today. It is important for us to go online for our business. At HashInclude we provide web designing services and products. As per your requirements we analyze your working model and try to give the best out of it. Here at HashInclude we have professional team of people who are well versed in designing and development who can help you for this.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox v2 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.2s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-copy-paste"></i>
                     </div>
                  </div>
                  <h3><a href="#">Computer Solutions</a></h3>
                  <p>HashInclude provides technology-based business process solutions, next-gen mobility solutions. The solutions are built on proprietary industrial frameworks that significantly reduce work effort and cost while providing faster go-to-market speeds and nimble responses to market dynamics - called Platformization and product engineering services. </p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox v2 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.4s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-pen"></i>
                     </div>
                  </div>
                  <h3><a href="#">ELEGANT DESIGN PROJECT</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox v2 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.6s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-scissors"></i>
                     </div>
                  </div>
                  <h3><a href="#">A THOUGHTFUL IDEA</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="spacer"></div>
            <div class="span12">
               <div class="titlebox Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                  <h2 class="subtitle text-white">Other services</h2>
                  <h1 class="maintitle text-color">MORE INFORMATION ABOUT US</h1>
                  <p class="text-white">Vestibulum molestie ut libero quis bibendum. Maecenas congue nisl felis, eu molestie tellus sodales nec. Donec ac ullamcorper nisi. Vestibulum molestie ut.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
            <div class="span6">
               <div class="accordion Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                  <div class="toggle">
                     <div class="toggle-title active"><span>BRANDING</span></div>
                     <div class="toggle-content">
                        <p>We do brandings.</p>
                     </div>
                  </div><!-- /toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>BUSINESS CARDS</span></div>
                     <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /.toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>POSTER</span></div>
                     <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /.toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>BANNER</span></div>
                     <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /.toggle -->
               </div><!-- /.accordion -->
            </div><!-- /.span6 -->
            <div class="span6">
               <div class=" Hashinc-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="75%">
                  <img src="images/responsive.png" alt="image" class="img-right">
               </div>
            </div><!-- /.span6 -->
        </div><!-- /.row -->
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
                  <a href="#">SERVICES</a> |
                  <a href="portfolio.php">OUR WORK</a> |
                  <a href="contact.php">CONTACT</a> |
                  <a href="blog.php">BLOG</a>
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