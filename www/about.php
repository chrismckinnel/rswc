<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About</title>
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
        <h1>About Us</h1>
        <p><img src="images/photo.jpg" alt="Photo" width="250" height="166" border="0" align="right" class="image_border" />
          VCS is a West Coast business specialising in Pest Control and Environmental Management. Our team has a long history of dealing with RMA consenting issues, and have developed strong working relationships with most agencies and interest groups up and down the West Coast.<br><br>
          Consultation is a speciality of VCS and we pride ourselves on developing innovative solutions that allow everyone to enjoy the benefits of the West Coast’s natural resources.</p>
        </p>
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