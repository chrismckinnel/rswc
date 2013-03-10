<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site Map</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<meta name="description" content="business description for search engines" />
<meta name="keywords" content="keyword, keyword, keyword, keyword, keyword" />
<!--below is the code to display the menu properly in ie6-->
<!--[if IE 6]>
<style type="text/css"> 
#header_contact{
margin:8px 25px 0px 0px; }/* you may need to change these margins if your contact info is larger, order is top, right, bottom, left*/
/*the 2 columns of white*/
#content_bg { 
	background-image:url(images/content_box_tile.gif);
	background-repeat:repeat-y;
}
</style>
<script type="text/javascript" src="js/hide-select.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="background_texture">
  <div id="leaf">
    <div id="wrapper">
      <div id="header">
        <div id="header_contact"><a href="contact.html"><img src="images/header_contact.png" alt="Contact us" width="244" height="109" border="0" /></a></div>
        <div id="logo"><a href="index.html"><img src="images/logo.png" alt="logo" width="284" height="78" border="0" /></a></div>
      </div>
      <div id="header_menu">
        <ul id="navigation">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a>
            <!--notice you do not close the </li> here -->
            <ul class="second-level">
              <!--start a new list with the style: class="second-level"-->
              <li> <a href="#">Other Service 1</a></li>
              <li> <a href="#">Other Service 2</a></li>
              <li> <a href="#">Other Service 3</a></li>
              <li> <a href="#">Other Service 4</a></li>
              <li> <a href="#">Other Service 5</a></li>
              <li> <a href="#">Other Service 6</a></li>
            </ul>
            <!-- close the new list-->
          </li>
          <!-- close the services <li>-->
          <li><a href="sitemap.php">Site Map</a> </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html"  style="background-image:none;">
            <!--this gets rid of last divider-->
            Contact Us</a></li>
        </ul>
      </div>
      <div class="top"><img src="images/content_box_top.png" width="940" height="10" alt="top" /></div>
      <div id="content_bg">
        <div id="left_column">
          <!--start main text-->
<!--start site map code-->
<h1>Site Map</h1>
<ul>
  <?php
	$files = glob("*.html");
	$ignore_files = array( //add any file names of files you don't want to appear in the site map
		"formsubmit.php",
		"thankyou.html",
	);
	foreach($files as $f){ 
		if(in_array($f,$ignore_files))continue;
		$file_data = file_get_contents($f);
		if(preg_match('/<title>([^<]+)<\/title>/i',$file_data,$matches)){
		$page_title = $matches[1];
		}else{
		$page_title = $f;
		}
		
		?>
  <li><a href="<?=$f;?>">
    <?=$page_title;?>
    </a></li>
  <?
	}
	?>
</ul>
<!--end site map code-->
</div>
        <!--end left column-->
        <div id="right_column">
          <div class="top_title"> <strong>LATEST NEWS </strong></div>
          <!--start news 1-->
          <div class="news_item">
            <p class="news_title"><a href="#">11 July 2009</a></p>
            <p>Donec ipsum mauris, mattis sed, vestibulum vitae, luctus a, eros. Duis consequat arcu vehicula pede. </p>
            <p class="size11"><a href="#">Read More »</a> </p>
          </div>
          <!--end news 1-->
          <!--start news 2-->
          <div class="news_item">
            <p class="news_title"><a href="#">11 July 2009</a></p>
            <p>Donec ipsum mauris, mattis sed, vestibulum vitae, luctus a, eros. Duis consequat arcu vehicula pede. </p>
            <p class="size11"><a href="#">Read More »</a> </p>
          </div>
          <!--end news 2-->
          <div class="news_item"><img src="images/icon_news.gif" alt="News" align="top" /> <span class="news_title"><a href="#">News Archive</a></span></div>
          <!--Start Quote Box-->
          <div class="quote_box_container" style="border-top:1px solid #e7e7e7;">
            <div class="image"><img src="images/icon_quote.png" alt="Quote" width="67" height="64" border="0" /></div>
            <div class="text">
              <p class="title"><a href="#">GET A FREE QUOTE </a></p>
              <p>To receive a ball-park quote for your project we need to ask you a few questions.</p>
            </div>
            <hr class="clear" />
          </div>
          <!--End Quote Box-->
          <!--start testimonial-->
          <div class="testimonial">
            <p class="title">CLIENT TESTIMONIAL </p>
            <p class="italic"><img src="images/testimonal_spacer.gif" alt="spacer" width="47" height="27" align="left" />Donec metus risus, viverra vel, vulputate     
              eget, feugiat ac, magna. Nunc semper, nunc eu sollicitudin mollis, nunc orci sodales enim, vitae tincidunt neque mauris a nulla. Cras vel pede vel nisi consequat congue. Fusce id risus </p>
            <p><strong>Mr Smith - Company</strong> </p>
          </div>
          <!--testimonial-->
        </div>
        <hr class="clear" />
        <!--this make sure the bottom of the columns stays at the bottom-->
      </div>
      <div class="bottom"><img src="images/content_box_bottom.png" width="940" height="21" alt="bottom" /></div>
    </div>
    <div id="footer">
      <div class="left">&copy; Company Name</div>
      <div class="right"><a href="sitemap.php">Site map</a> | <a href="#">Privacy</a> | <a href="contact.html">Contact Us</a></div>
    </div>
  </div>
</div>
</body>
</html>
