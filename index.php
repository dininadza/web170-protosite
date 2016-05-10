<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo ('description'); ?> | <?php bloginfo ('name'); ?></title>

<!-- begin meta-->
<meta name="viewport" content="width=device-width initial-scale=1">

<!-- links --> 
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<!--CSS styles-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles.css">
<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">  
<link href="js/css/form.css" type="text/css" rel="stylesheet"> <!-- this is for form -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/component.css" />
<link rel="shortcut icon" href="favicon.ico">
<!--end CSS-->

<!--javascript-->
<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_url');?>/js/script.js"></script>	 
<!--end js --> 

<!-- WP Head Function -->
<?php wp_head(); ?>

<!--WP Head function ends-->  

</head>

<!--body starts here-->
<body <?php body_class(); ?>>
<!--header starts here--> 
<div id="top">
<header>
<a href="#"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="company logo" class="logo"></a> 

<!--utility menu-->
<section id="utility">
    <!--social buttons-->
    <img src="<?php bloginfo('template_directory');?>/images/fb.png" alt="fb" class="socialbutton"/>
    <img src="<?php bloginfo('template_directory');?>/images/twitter.png" alt="twitter" class="socialbutton"/>
    <img src="<?php bloginfo('template_directory');?>/images/linkedin.png" alt="linkedin" class="socialbutton"/>
    <!--end social buttons-->
    <p>+603.7725.9050 | hello@paper-pr.com</p>
</section>
<!--utility ends-->

</header>
</div>
<!--header ends here--> 

<!--navigation starts here-->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' =>'div', 'container_id' => 'cssmenu')); ?>


<!--<div id="cssmenu">

<ul>
 <li><a href="main.html">About</a>
  <ul>
      <li><a href="#">our team</a></li>
      <li><a href="#">careers</a></li>
  </ul>
  </li>
 <li><a href="js/services.html">Services</a>
    <ul>
      <li><a href="js/mediarelations.html">media relations</a></li>
      <li><a href="js/reputation.html">reputation management</a></li>
      <li><a href="js/creative.html">design</a></li>
      <li><a href="#">media training</a></li>
      <li><a href="#">CSR</a></li>
      <li><a href="#">editorial</a></li>
      <li><a href="#">branding</a></li>
      <li><a href="#">public affairs</a></li>
     </ul>
  </li>
  
  <li><a href="js/clients.html">Our Clients</a>
  </li>
  
  <li><a href="#">Our Work</a></li>
  <li><a href="#">Blog</a></li>
 <li><a href="js/contact.html">Contact</a></li>
</ul>
</div>-->
<!--nav ends--> 


<!--main content here-->
<div id ="maincontainer">
<section class="aboutUs">
<article>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(''); ?>
<?php endwhile; endif;  ?>

<p>index.php</p>
</article>
<!--main content ENDS-->

<!--aside content STARTS-->
<aside>
<img src="<?php bloginfo('template_directory');?>/images/team.jpg" alt="company motto" class="companyinfo"/>
<ul>
<li><a href="#">meet the team</a></li>
<li><a href="#">careers</a></li>
</ul
</aside>
<!--aside content ENDS-->

</section>

<!-- bottom contents STARTS--> 
<section id="bottomcontent">
    <article class="bottom-left">
    <h3>ABOUT PAPER</h3>
    <p>Paper Public Relations is an award winning communications consultancy with 20 years of experience in many sectors of the communications industry.</p>
    </article>
    
    <article class="bottom-right">
    <h3>CONTACT US</h3>
    <p>M-3-19 Plaza Damas Sri Hartamas<br>
    50480 Kuala Lumpur, Malaysia<br>
    (P) +603 7725 9050<br>
    (E) hello@paper-pr.com<br>
    <img src="<?php bloginfo('template_directory');?>/images/fb.png" alt="fb" class="socialbutton"/>
    <img src="<?php bloginfo('template_directory');?>/images/twitter.png" alt="twitter" class="socialbutton"/>
    <img src="<?php bloginfo('template_directory');?>/images/linkedin.png" alt="linkedin" class="socialbutton"/>
    <!--insert social media--> 
    </p>
    </article>
</section>
<!-- bottom contents ENDS-->

<!--footer STARTS-->
<footer>
    <small>
     <p>&copy; Dini Nadza 2016, All Rights Reserved</p>
        <ul id="footernav">
        <li><a href='main.html'>ABOUT </a></li>/
        <li><a href='js/services.html'>SERVICES </a></li>/
        <li><a href='js/clients.html'>OUR CLIENTS </a></li>/
        <li><a href='#'>OUR WORK </a></li>/
        <li><a href='#'>BLOG </a></li>/
        <li><a href='js/contact.html'>CONTACT </a></li>
        </ul>    
    </small>
</footer>
<!-- footer ENDS-->
</div>
<!--WP footer starts-->
<?php wp_footer(); ?>
<!--WP footer ends-->
</body>

</html>