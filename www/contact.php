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
                    data-address="3 Elizabeth Street, Greymouth, New Zealand"
                    data-zoom="15"
                    style="width: 100%; height: 400px;">
                </div>
            </section>
            <!-- end google map -->
            
            <!-- begin main -->
            <section id="main" class="three-fourths">
            <h2>Contact Us</h2>
            <p>To further discuss your resource management needs please contact Phil McKinnel on +64 21 849 978 or send an email to <a href="phil@rswc.co.nz">phil@rswc.co.nz</a></p>
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
        <?php include('includes/footer.php'); ?>
</div>
<!-- end container -->

</body>
</html>