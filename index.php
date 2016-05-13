<?php get_header(); ?>
<section class="aboutUs">
<article>
<?php 
//if theres post - while post, get the id of the post
if(have_posts()) : while(have_posts()) : the_post(); //start loop 1 that pulls the SEO text ?>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<small>Posted in <?php the_category(); ?></small>
<?php the_content(''); ?>
<?php endwhile; endif;  ?>
<p>index.php</p>
</article>
<!--main content ENDS-->
<?php get_sidebar();?>
<?php get_footer();?> 