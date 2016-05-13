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
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/ideal-image-slider.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/default.css">  
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/normalize.css">
<!--end CSS-->

<!--javascript-->
<script src="<?php bloginfo('template_directory');?>/scripts/modernizr.custom.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>scrips/js/script.js"></script>	 
<script src="<?php bloginfo('template_directory');?>/scripts/ideal-image-slider.js"></script>
<script src="<?php bloginfo('template_directory');?>/scripts/sliderstart.js"></script>
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
<a href=<?php echo get_settings('home');?>><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="company logo" class="logo"></a> 

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