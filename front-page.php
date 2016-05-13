<?php get_header(); ?>
 <!-- Begin Flex Slider -->
<div id="slider">
<img src="<?php bloginfo('template_directory');?>/images/corporate1.jpg" data-src-2x="<?php bloginfo('template_directory');?>/images/corporate1.jpg" alt="Slide 1" />
<img data-src="<?php bloginfo('template_directory');?>/images/team.jpg" data-src-2x="<?php bloginfo('template_directory');?>/images/team.jpg" alt="Slide 2" />
<img data-src="<?php bloginfo('template_directory');?>/images/project.jpg" data-src-2x="<?php bloginfo('template_directory');?>/images/project.jpg" alt="Slide 3" />
</div>
	<script>
	var slider = new IdealImageSlider.Slider('#slider');
	slider.start();
	</script> 
<!-- End Flex Slider -->
<section class="mainContent">
<h2>our services</h2>
    <p id="relations"><a href="mediarelations.html">media<Br>relations</a></p>
    <p id="reputation"><a href="reputation.html">reputation<br>management</a></p>
    <p id="graphic"><a href="creative.html">design</a></p>
    <p id="branding"><a href="#">branding</a></p>
    <p id="training"><a href="#">media<br>training</a></p>
    <p id="csr"><a href="#">csr</a></p>
    <p id="editorial"><a href="#">editorial</a></p>
    <p id="public"><a href="#">public<bR>affairs</a></p>
  </section>
<!--CTA starts here-->
<section id="cta">
    <article class="cta1">
    <?php 
//if theres post - while post, get the id of the post
if(have_posts()) : while(have_posts()) : the_post(); //start loop 1 that pulls the SEO text ?>
<h2><?php the_title();?></h2>
<?php the_content(''); ?>
<?php endwhile;endif; ?>
<p>front-page.php</p>
    </article>

<article class="cta2">
<h2>Blog posts: </h2>
<?php rewind_posts(); // stop loop one?>
<?php query_posts('showposts=3'); //give directions to loop two?>
<?php if (have_posts()) : while(have_posts()) : the_post();?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
<?php endwhile; endif; ?>

</article>

<article class="cta3">
<h2>Contact me</h2>
<p>gergoeigreio gosegrosgb obebrgrbfo abfejrbfbo bfqbfqbrbf bfqbfrqbq bqbfruoqbfr</p>    
</article>
</section>
<section id="clientlogo">
    <h2>Our clients</h2>
<!-- client logo-->
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_directory');?>/images/epf.png" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory');?>/images/hdc.png" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory');?>/images/khazanah.png" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory');?>/images/tnb.png" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory');?>/images/latar.png"/>
    </li>
        <li>
      <img src="<?php bloginfo('template_directory');?>/images/paab.png"/>
    </li>
  </ul>
</section>

<!--main content ENDS-->
<?php get_footer(); ?> 
