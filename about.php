<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
   <!-- Basic Page Needs -->
   <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
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

   <!-- Mobile Specific Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- Bootstrap  -->
   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

   <!-- Colors -->
   <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
   
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
                  <li class="phone"><a href="#">+91 917 6156 512</a></li>
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
                           <img src="images/logo.png" alt="Hashinc" />
                        </a>
                     </div><!-- /.logo -->
                  </div><!-- /.span2 -->
                  <div class="span10">
                     <div class="btn-menu"></div><!-- /mobile menu button -->
                     <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                           <li><a href="index.php">Home</a>
                           <li><a class="active" href="#">About Us</a>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="portfolio.php">Our Work</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a href="blog.php">Blog</a></li>
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
			   	<h1>About</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="#">Home /</a></li>
					<li><a href="#">About /</a></li>
					<li>Dark version</li>
					</ul>
			   </div><!-- /.span6 -->
         </div><!-- /.page-title-wrapper -->
      </div><!-- /.container -->
   </section>

   <!-- About -->
   <section class="section entry-post" style="background-color: #10101d">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="titlebox Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                  <h2 class="subtitle text-white">Our team</h2>
                  <h1 class="maintitle text-color">WHO ARE WE?</h1>
                  <p class="text-white">Sed velit tellus, tempus sit amet facilisis ut, vulputate at mi. Aliquam sollicitudin augue eu lectus eleifend, quis molestie ante sollicitudin. Donec scelerisque justo vitae lorem pulvinar fringilla.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
            <div class="span3">
              <div class="team Hashinc-animation" data-animation="fadeIn" data-animation-delay="0" data-animation-offset="75%">
                <div class="photo">
                  <div class="overlays">
                    <img src="images/team/1.jpg" alt="image">
                  </div>
                </div>
                <div class="info">
                  <h5 class="name">Surakshit Kumar</h5>
                  <p class="position">Front-End Developer</p>
                </div>
                <ul class="socials unstyled">
                  <li><a href="#"><i class="icons-facebook"></i></a></li>
                  <li><a href="#"><i class="icons-twitter"></i></a></li>
                 
                </ul>
                <div class="clearfix"></div>
              </div><!-- /.team -->
            </div><!-- /.span3 -->
            <div class="span3">
              <div class="team Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                <div class="photo">
                  <div class="overlays">
                    <img src="images/team/2.jpg" alt="image">
                  </div>
                </div>
                <div class="info">
                  <h5 class="name">Manjunath Poilath</h5>
                  <p class="position">Back-End Developer</p>
                </div>
                <ul class="socials unstyled">
                  <li><a href="#"><i class="icons-facebook"></i></a></li>
                  <li><a href="#"><i class="icons-twitter"></i></a></li>
                
                </ul>
                <div class="clearfix"></div>
              </div><!-- /.team -->
            </div><!-- /.span3 -->
            <div class="span3">
              <div class="team Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0.4s" data-animation-offset="75%">
                <div class="photo">
                  <div class="overlays">
                    <img src="images/team/3.jpg" alt="image">
                  </div>
                </div>
                <div class="info">
                  <h5 class="name">Arihant Jain</h5>
                  <p class="position">Designer</p>
                </div>
                <ul class="socials unstyled">
                  <li><a href="#"><i class="icons-facebook"></i></a></li>
                  <li><a href="#"><i class="icons-twitter"></i></a></li>
                 
                </ul>
                <div class="clearfix"></div>
              </div><!-- /.team -->
            </div><!-- /.span3 -->
            <div class="span3">
              <div class="team Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
                <div class="photo">
                  <div class="overlays">
                    <img src="images/team/4.jpg" alt="image">
                  </div>
                </div>
                <div class="info">
                  <h5 class="name">Sriramakrishna</h5>
                  <p class="position">Webdesign</p>
                </div>
                <ul class="socials unstyled">
                  <li><a href="#"><i class="icons-facebook"></i></a></li>
                  <li><a href="#"><i class="icons-twitter"></i></a></li>
              
                </ul>
                <div class="clearfix"></div>
              </div><!-- /.team -->
            </div><!-- /.span3 -->
            <div style="margin-left: 480px;margin-top:30px;" class="span3">
              <div class="team Hashinc-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
                <div class="photo">
                  <div class="overlays">
                    <img src="images/team/4.jpg" alt="image">
                  </div>
                </div>
                <div class="info">
                  <h5 class="name">Kunal Dhariwal</h5>
                  <p class="position">Webdesign</p>
                </div>
                <ul class="socials unstyled">
                  <li><a href="#"><i class="icons-facebook"></i></a></li>
                  <li><a href="#"><i class="icons-twitter"></i></a></li>
                </ul>
                <div class="clearfix"></div>
              </div><!-- /.team -->
            </div><!-- /.span3 -->
            <div class="spacer large"></div>
            <div class="span6">
              <h3 class="title">A BRIEF HISTORY OF OUR COLLECTIVE</h3>
              <div class="spacer small"></div>
              <div class="text-block">
                <p>Sed quis turpis eu nulla pretium porta. In volutpat augue ut odio iaculis sagittis. Donec enim massa, euismod at velit vitae, viverra venenatis leo. Donec hendrerit condimentum sem, sit amet tempor enim posuere et. In sit amet quam ante. In dignissim dui risus, non ornare enim tincidunt nec. Sed sit amet enim eget sapien convallis posuere. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc et tempor magna, quis egestas lorem. Vestibulum fringilla non lorem id dictum.</p>
                <p>Etiam laoreet consequat mauris, a congue lectus sodales eget. Morbi blandit, ipsum ac consequat molestie, nisi enim euismod purus, in consectetur nisl eros auctor orci.</p>
              </div>
            </div><!-- /.span6 -->
            <div class="span6">
              <h3 class="title">KNOWLEDGE</h3>
              <div class="spacer small"></div>
              <div class="progress-single">
                <div class="name">ADOBE PHOTOSHOP</div>
                <div class="perc">92%</div>
                <div class="progress-bar" data-percent="92" data-waypoint-active="yes">
                  <div class="progress-animate"></div>
                </div>
              </div><!-- /.progress-single -->
              <div class="progress-single">
                <div class="name">ADOBE ILLUSTRATOR</div>
                <div class="perc">70%</div>
                <div class="progress-bar" data-percent="70" data-waypoint-active="yes">
                  <div class="progress-animate"></div>
                </div>
              </div><!-- /.progress-single -->
              <div class="progress-single">
                <div class="name">ADOBE INDESIGN</div>
                <div class="perc">88%</div>
                <div class="progress-bar" data-percent="88" data-waypoint-active="yes">
                  <div class="progress-animate"></div>
                </div>
              </div><!-- /.progress-single -->
              <div class="progress-single">
                <div class="name">WACOM</div>
                <div class="perc">75%</div>
                <div class="progress-bar" data-percent="75" data-waypoint-active="yes">
                  <div class="progress-animate"></div>
                </div>
              </div><!-- /.progress-single -->
            </div><!-- /.span6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

  

   <!-- Socials -->
   <section class="section social-section" style="padding: 50px 0; background-color: #d9dff2">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="socials-list Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                  <div class="follow-us">
                   <center> <h2><strong>Follow Us</strong></h2></center> 
                  </div>
                  <div class="social-icons">
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-twitter"></i>
                           </div>
                        </div>
                     </a>
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-facebook"></i>
                           </div>
                        </div>
                     </a>
                    
                     <a class="iconwrap" href="#">
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
                  <span><a href="www.hashinc.in"><img src="images/logo.png"></a></span> 2016 | ALL RIGHTS RESERVED
               </div>
               <div class="bottom-links pull-right">
                  <a href="index.php">HOME</a> |
                  <a href="about.php">ABOUT US</a> |
                  <a href="services.php">SERVICES</a> |
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