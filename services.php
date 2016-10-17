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
                  <li class="email"><a href="#">info@yourdomain.com</a></li>
                  <li class="skype"><a href="#">skypename</a></li>
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
                           <li><a href="about.php">About Us</a>
                           <li><a class="active" href="#">Services</a></li>
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
			   	<h1>Services</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="#">Home /</a></li>
					<li><a href="#">Services /</a></li>
					<li>Dark version</li>
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
                  <p class="text-white">Fusce nec fermentum arcu, eu elementum libero. Phasellus euismod et turpis ut viverra. Quisque vel tristique tellus. Etiam nec neque eu augue fringilla porta.</p>
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
                  <h3><a href="#">STRATEGIC ACTION PLAN</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
               </div>
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="iconbox v2 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0.2s" data-animation-offset="75%">
                  <div class="icon">
                     <div class="iconbg">
                        <i class="icons-copy-paste"></i>
                     </div>
                  </div>
                  <h3><a href="#">PROFESSIONAL DESIGN</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis fermentumurna vitae.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>EDITORIAL DESIGN</span></div>
                     <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /.toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>ILLUSTRATION</span></div>
                     <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum nisi, interdum ut nisi a, congue ultricies arcu. Vivamus sit amet erat orci. Cras congue ligula eros, eget egestas nisi gravida semper. Proin vel malesuada mauris, vitae ultricies arcu. Praesent vitae metus sed massa consectetur vulputate id nec dui.</p>
                     </div>
                  </div><!-- /.toggle -->
                  <div class="toggle">
                     <div class="toggle-title"><span>WEBDESIGN</span></div>
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
               <div class="socials-list Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                  <div class="follow-us">
                     <h3>Follow Us</h3>
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
                              <i class="icons-dribbble"></i>
                           </div>
                        </div>
                     </a>
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-behance"></i>
                           </div>
                        </div>
                     </a>
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-pinterest"></i>
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
                     <a class="iconwrap" href="#">
                        <div class="icon">
                           <div class="iconbg">
                              <i class="icons-vimeo-square"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div><!-- /.socials-list -->
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <!-- Footer -->
   <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="span3">
               <div class="widget widget-brand">
                  <div class="logo">
                     <a href="./"><img src="images/logo.png" alt="Hashinc" /></a>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non turpis auctor, rutrum lacus ultrices, venenatis odio. Cras elementum elit eu ante interdum cursus. Curabitur a risus ornare, volutpat diam at, suscipit nisi. Nunc elit nunc, rhoncus eu fermentum sed.</p>
                  <a href="#" class="btn-Hashinc border-type">READ MORE</a>
               </div><!-- /.widget-brand -->
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="widget widget-recent-posts">
                  <h5 class="widget-title">Recent Posts</h5>
                  <ul class="unstyled">
                     <li>
                        <img src="images/blog/t1.jpg" alt="image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue lorem.</p>
                        <div class="meta-post">
                           <span class="date">24 12 2014</span>
                           <span class="author"><a href="#">by Admin</a></span>
                        </div>
                     </li>
                     <li>
                        <img src="images/blog/t2.jpg" alt="image">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue lorem.</p>
                        <div class="meta-post">
                           <span class="date">24 12 2014</span>
                           <span class="author"><a href="#">by Admin</a></span>
                        </div>
                     </li>
                  </ul>
               </div><!-- /.widget-recent-posts -->
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="widget widget-tags">
                  <h5 class="widget-title">Tags</h5>
                  <div class="tags">
                     <a href="#">Portfolio</a>
                     <a href="#">Wordpress</a>
                     <a href="#">Themeforest</a>
                     <a href="#">HTML</a>
                     <a href="#">Art</a>
                     <a href="#">Creative</a>
                     <a href="#">PSD</a>
                  </div>
               </div><!-- /.widget-tags -->
            </div><!-- /.span3 -->
            <div class="span3">
               <div class="widget widget-newsletter">
                  <h5 class="widget-title">Newsletter</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non turpis auctor, rutrum lacus ultrices, venenatis odio.</p>
                  <form method="post" action="#" id="subscribe-form" data-mailchimp="true">
                     <div id="subscribe-content">
                        <div class="input">
                           <input type="text" id="subscribe-email" name="subscribe-email" placeholder="Your address e-mail">
                        </div>
                        <div class="button">
                           <button type="button" id="subscribe-button" class="" title="Subscribe now"><i class="icons-angle-right"></i></button>
                        </div>
                     </div>
                     <div id="subscribe-msg"></div>
                  </form>
               </div><!-- /.widget-newsletter -->
            </div><!-- /.span3 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </footer>

   <!-- Bottom -->
   <div class="bottom">
      <div class="container">
         <div class="row">
            <div class="span12">
               <div class="copyright pull-left">
                  <span>HashInclude</span> 2016 | ALL RIGHTS RESERVED
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