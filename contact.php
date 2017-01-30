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
                     <div class="btn-menu"></div><!-- //mobile menu button -->
                     <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                           <li><a href="index.php">Home</a>
                           <li><a href="about.php">About Us</a>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="portfolio.php">Our Work</a></li>
                           <li><a class="active" href="#">Contact</a></li>
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
			   	<h1>Contact</h1>
			   </div><!-- /.span6 -->
			   <div class="span6 breadcrumbs">
					<ul>
					<li><a href="#">Home /</a></li>
					<li><a href="#">Contact /</a></li>
					<li>Dark version</li>
					</ul>
			   </div><!-- /.span6 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
   </section>

   <!-- Form -->
   <section class="section entry-post" style="background-color: #10101d">
      <div class="container" style="margin-bottom:-550px;">
         <div class="row">
            <div class="span12">
               <div class="titlebox">
                  <h2 class="subtitle text-white">Contact</h2>
                  <h1 class="maintitle text-color">DO YOU HAVE QUESTIONS?</h1>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac cursus tortor, nec accumsan metus. Sed dapibus elit semper imperdiet suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
               <div class="spacer"></div>
            </div><!-- /.span12 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
      <div style="width: 100%; height: 300px; margin-bottom: 60px;margin-top:-150px;">
      </div><!-- /map -->
      <div class="container">
      <?php 
      $dbcon1=@mysql_connect("localhost","root","", true);
      mysql_select_db('hits_obe',$dbcon1);
      ?>
         <div class="row">
            <div class="span6 Hashinc-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
               <form class="contact-form" method="post" action="contact.php#success">
                  <div id="success" class="note"></div>
                  <div class="input-wrap name">
                     <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name">
                  </div>
                  <div class="input-wrap email">
                     <input type="text" value="" tabindex="2" placeholder="E-mail" name="email" id="email">
                  </div>
                   <div class="input-wrap email">
                     <input type="text" value="" tabindex="2" placeholder="E-mail" name="email" id="email">
                  </div>
                  <div class="textarea-wrap">
                     <textarea class="" tabindex="3" placeholder="Message" name="message" id="message"></textarea>
                  </div>
                  <div class="submit-wrap">
                     <input type="submit" name="submi" class="btn-Hashinc black">
                  </div>
               </form><!-- /.comment-form -->
            </div><!-- /.span6 -->
            <div class="span3 Hashinc-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="75%">
               <h3 class="title">INFORMATION</h3>
               <ul class="information unstyled">
                  <li class="road">2-3 London Rd, London SE1 6JZ <br>UnitedKingdom</li>
                  <li class="phone">+91 917 6156 512 <br>+44 256 2583 257</li>
                  <li class="email">info@yourdomain.com <br>contact@yourdomain.com</li>
               </ul>
            </div><!-- /.span3 -->
            <div class="span3 Hashinc-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="75%">
               <h3 class="title">ALWAYS AT WORK!</h3>
               <ul class="working unstyled">
                  <li>Monday <span>9:00 am - 5:00 pm</span></li>
                  <li>Tuesday <span>9:00 am - 5:00 pm</span></li>
                  <li>Wednesday <span>9:00 am - 5:00 pm</span></li>
                  <li>Thursday <span>9:00 am - 5:00 pm</span></li>
                  <li>Friday <span>10:00 am - 7:00 pm</span></li>
                  <li>Saturday <span>10:00 am - 2:00 pm</span></li>
                  <li>Sunday <span>10:00 am - 1:00 pm</span></li>
              </ul>
            </div><!-- /.span3 -->
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
         </div>
      </div>
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
                  <a href="services.php">SERVICES</a> |
                  <a href="portfolio.php">OUR WORK</a> |
                  <a href="#">CONTACT</a> |
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
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
   <script type="text/javascript" src="javascript/gmap3.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
	<script>
	var ajaxContactForm = function() {
	      // http://www.bitrepository.com/a-simple-ajax-contact-form-with-php-validation.html
	      $('.contact-form').each(function(){
	         var $this = $(this); 
	         $this.submit(function() {
	            var str = $this.serialize();
	            $.ajax({
	               type: "POST",
	               url:  $this.attr('action'),
	               data: str,
	               success: function(msg) {
	                  // Message Sent? Show the 'Thank You' message and hide the form
	                  var result;
	                  if(msg == 'OK') {
	                     result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
	                  } else {
	                     result = msg;
	                  }
	                  result = '<div class="result">' + result + '</div>';
	                  $this.find('.note').html(result);
	               }
	            });
	            return false;
	         }); // submit

	      }); // each contactform
	   }; // contact
	</script>
</body>

</html>