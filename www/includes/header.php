<?php include('menu.php'); ?>
<!-- begin header -->
<header id="header" class="container">
    <!-- begin header top -->
    <section id="header-top" class="clearfix">
        <!-- begin header left -->
        <div class="one-half">
            <h1 id="logo"><a href="index.php"><img src="images/rswc-logo.png" alt="Resource Solutions West Coast"></a></h1>
        </div>
        <!-- end header left -->

        <!-- begin header right -->
        <div class="one-half column-last">
            <!-- begin contact info -->
            <div class="contact-info">
                <p class="phone"><strong>Office:</strong> <a href="tel:+6437689978" onclick="ga('send', 'event', 'link', 'click', 'header office phone');">03 768 9978</a></p>
                <p class="phone"><strong>Mobile:</strong> <a href="tel:+6421849978" onclick="ga('send', 'event', 'link', 'click', 'header mobile phone');">021 849 978</a></p>
                <p class="email"><a href="mailto:phil@rswc.co.nz" onclick="ga('send', 'event', 'link', 'click', 'header email');">phil@rswc.co.nz</a></p>
            </div>
            <!-- end contact info -->
        </div>
        <!-- end header right -->
    </section>
    <!-- end header top -->

    <!-- begin navigation bar -->
    <section id="navbar" class="clearfix">
        <!-- begin navigation -->
        <nav id="nav">
            <?php print_main_menu(); ?>
        </nav>
        <!-- end navigation -->
    </section>
    <!-- end navigation bar -->

</header>
<!-- end header -->