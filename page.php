<?php get_header(); ?>
<section class="aboutUs">
<article id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<h2><?php the_title();?></h2> 
<?php the_content(''); ?>
<?php endwhile; endif;?>
<p>page.php</p>
</article>
<!--main content ENDS-->
<?php get_sidebar();?>
<?php get_footer();?> 