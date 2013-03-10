<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact VCS Environmental Management Services</title>
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
      <?php
        include('header.html');
      ?>
      <div class="top"><img src="images/content_box_top.png" width="940" height="10" alt="top" /></div>
      <div id="content_bg">
        <div id="left_column">
          <!--start main text-->
        <h1>Contact Us</h1>
        <div>
          <div class="left_details"> <strong>VCS Environmental Management</strong>
            <p> <span class="contact_title">Phone:</span> <span class="contact_detail">+64 3 768 9674</span> <br />
              <span class="contact_title">Fax:</span> <span class="contact_detail">+64 3 768 9674</span> <br />
            <hr class="clear" />
            <p><span class="green"><strong>Postal Address:</strong></span><br />
              VCS Environmental Management Services<br />
              P.O. Box 453<br />
              Greymouth 7840
            </p>
            <p><span class="green"><strong>Physical Address:</strong></span><br />
              VCS Environmental Management Services<br />
              29 Jacks Road<br />
              Southbeach<br />
              Greymouth 7805</p>
          </div>
          <div id="map" class="map"></div>
          
          <!--change the big long number after key= to your API from http://code.google.com/apis/maps/signup.html-->
            <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyDAWOAa83pF9X22h3ocJ6I6nF2aPIie5j8&amp;z=12" type="text/javascript"></script>
            <script type="text/javascript">
			 //<![CDATA[
			function loadmap() {
			 if (GBrowserIsCompatible()) {
			  var map = new GMap2(document.getElementById("map"));
			  var geocoder = new GClientGeocoder();
			  map.setCenter(new GLatLng(37.4419, -122.1419), 13);
			  map.addControl(new GSmallMapControl());
			  //change the address below to the one you want the marker to point to
			  var address = "29 Jacks Road, Greymouth, New Zealand";
			  geocoder.getLatLng(
			      address,
			      function(point) {
			       if (!point) {
			         alert(address + " not found");
			       } else {
			         map.setCenter(point, 15);
			         var marker = new GMarker(point);
			         map.addOverlay(marker);
					  // change the address below to the one you want displayed in the popup
			         marker.openInfoWindowHtml(
                       "<strong>VCS Environmental Management Services:</strong><br>"+
                       "29 Jacks Road, Greymouth, New Zealand");
			       }
			     }
			  );
			 }
			}
			window.onload=loadmap;
			//]]>
			</script>
          
          <hr />
          <h1>Email Us </h1>
          <p>To contact us via email please complete the form below.</p>
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
            <label for="name">Name:</label>
            <input name="name" type="text" class="forms" id="name" size="35" /><br>
            <label for="email">Email:</label>
            <input name="email" type="text" class="forms" id="email" size="35" /><br>
            <label for="phone">Phone:</label>
            <input name="phone" type="text" class="forms" id="phone" size="35" /><br>
            <label for="message">Message:</label>
            <textarea name="message" cols="35" rows="6" class="forms" id="message"></textarea><br>
            <input type="image" id="submit" name="submit" src="images/button_submit.gif" title="Submit Message" />
            </fieldset>
          </form>
        </div>
     </div>
        <!--end left column-->
      <?php
        include('sidebar.html');
      ?>
      </div>
      <div class="bottom"><img src="images/content_box_bottom.png" width="940" height="21" alt="bottom" /></div>
    </div>
    <?php
      include('footer.html');
    ?>
  </div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39089683-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
