<?php require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php'); ?>
<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
	<meta name="description" content="">
	<meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
    <?php
        include('includes/styles.php');
        include('includes/scripts.php');
    ?>
    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> <!-- Google maps -->
    <script src="js/jquery.gmap.min.js" type="text/javascript"></script> <!-- gMap -->
    
	<title>Resource Solutions West Coast - Contact</title>
</head>

<body>
<!-- begin container -->
<div id="wrap">
    <?php include('includes/header.php'); ?>
        
    <!-- begin content -->
        <section id="content" class="container clearfix">
        	<!-- begin page header -->
            <header id="page-header">
            	<h1 id="page-title">Contact</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
            <!-- begin google map --> 
            <section>
                <div id="map"
                    data-address="40 Broadway, London"
                    data-zoom="17"
                    style="width: 100%; height: 400px;">
                </div>
            </section>
            <!-- end google map -->
            
            <!-- begin main -->
            <section id="main" class="three-fourths">
            <!-- begin contact form -->
            <h2>Contact Us</h2>
            <p>To further discuss your resource management needs please contact Phil McKinnel on +64 21 849 978, fill in the below form or send an email to <a href="phil@rswc.co.nz">phil@rswc.co.nz</a></p>
            <div id="contact-notification-box-success" class="notification-box notification-box-success" style="display: none;">
                <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
                <a href="#" class="notification-close notification-close-success">x</a>
            </div>

                <div id="contact-notification-box-error" class="notification-box notification-box-error " style="display: none;">
                    <p id="contact-notification-box-error-msg" data-default-msg="Your message couldn't be sent because a server error occurred. Please try again."></p>
                    <a href="#" class="notification-close notification-close-error">x</a>
                </div>
            <form id="contact-form" class="content-form" method="post" action="#">
                <p>
                    <label for="name">Name:<span class="note">*</span></label>
                    <input id="name" type="text" name="name" class="required">
                </p>
                <p>
                    <label for="email">Email:<span class="note">*</span></label>
                    <input id="email" type="email" name="email" class="required">
                </p>
                <p>
                    <label for="subject">Subject:<span class="note">*</span></label>
                    <input id="subject" type="text" name="subject" class="required">
                </p>
                <p>
                    <label for="message">Message:<span class="note">*</span></label>
                    <textarea id="message" cols="68" rows="8" name="message" class="required"></textarea>
                </p>
                <?php
                if(ENABLE_CAPTCHA){
                    require_once ('recaptcha/recaptchalib.php');
                    echo '<p>';
                    echo recaptcha_get_html($captcha_public_key, null, USE_SSL);
                    echo '</p>';
                }
                ?>
                <p>
                    <input id="submit" class="button" type="submit" name="submit" value="Send Message">
                </p>
            </form>
            <p><span class="note">*</span> Required fields</p>
            <!-- end contact form -->
            </section>
            <!-- end main -->
            
            <!-- begin sidebar -->
            <aside id="sidebar" class="one-fourth column-last">
            	<div class="widget contact-info">
                    <h3>Contact Info</h3>
                    <p class="address"><strong>Address: </strong>3 Elizabeth Street, Greymouth, New Zealand</p>
                    <p class="phone"><strong>Phone: </strong>+64 21 849 978</p>
                    <p class="email"><strong>Email:</strong> <a href="mailto:phil@rswc.co.nz">phil@rswc.co.nz</a></p>
                    <p class="business-hours"><strong>Business Hours:</strong><br>
                    Monday-Friday: 8:00-18:00<br>
                    </p>
                </div>
            </aside>
            <!-- end sidebar -->
            
            <!-- end main content -->
        </section>
        <!-- end content -->             
    
	<!-- begin footer -->
	<footer id="footer">
    	<div class="container">
            <!-- begin footer top -->
            <div id="footer-top">
                <div class="one-fourth">
                	<div class="widget">
                        <h3>About Us</h3>
                        <p>Finesse is a responsive business and portfolio theme carefully handcrafted using the latest technologies.</p>
                        <p>It features a clean design, as well as extended functionality that will come in very handy.</p>
                    </div>
                </div>
                <div class="one-fourth">
                	<div class="widget latest-posts">
                        <h3>Latest Posts</h3>
                        <ul>
                            <li>
                                <a href="blog-post.php">How to Make Innovative Ideas Happen</a>
                                <span>March 10, 2012</span>
                            </li>
                            <li> <a href="blog-post.php">Web Development for the iPhone and iPad</a>
                                <span>March 10, 2012</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="one-fourth">
                	<div class="widget twitter-widget">
                    	<h3>Latest Tweets</h3>
                        <div class="tweet"></div>
                    </div>
                </div>
                <div class="one-fourth column-last">
                	<div class="widget contact-info">
                    	<h3>Contact Info</h3>
                        <p class="address"><strong>Address:</strong> 123 Street, City, Country</p>
                        <p class="phone"><strong>Phone:</strong> (123) 456-7890</p>
                        <p class="email"><strong>Email:</strong> <a href="mailto:info@finesse.com">info@finesse.com</a></p>
                        <div class="social-links">
                        	<h4>Follow Us</h4>
                            <ul>
                            	<li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                                <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                                <li class="google"><a href="#" title="Google+" target="_blank">Google+</a></li>
                                <li class="youtube"><a href="#" title="YouTube" target="_blank">YouTube</a></li>
                                <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                                <li class="rss"><a href="#" title="RSS" target="_blank">RSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer top -->	
            
            <!-- begin footer bottom -->
            <div id="footer-bottom">
            	<div class="one-half">
                	<p>Copyright &copy; 2012 Finesse. Created by <a href="http://themeforest.net/user/ixtendo">Ixtendo</a>.</p>
                </div>
                
                <div class="one-half column-last">
                	<nav id="footer-nav">
                        <ul>
                            <li><a href="index.php">Home</a> &middot;</li>
                            <li><a href="about-us.php">Templates</a> &middot;</li>
                            <li><a href="elements.php">Features</a> &middot;</li>
                            <li><a href="portfolio.php">Portfolio</a> &middot;</li>
                            <li><a href="blog.php">Blog</a> &middot;</li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- end footer bottom -->	
        </div>
	</footer>
	<!-- end footer -->
</div>
<!-- end container -->

</body>
</html>