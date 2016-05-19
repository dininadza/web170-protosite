<?php get_header(); ?>
<!--begin text-->
<section class="aboutUs">
<article id="single">
<?php 
//if theres post - while post, get the id of the post
if(have_posts()) : while(have_posts()) : the_post(); //start loop 1 that pulls the SEO text ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author();?> in <?php the_category(', '); ?></small>

<?php the_post_thumbnail('large');?>
<?php the_content('');?>
<?php endwhile; endif;?>
<p>single.php</p>
</article>
<!--main content ENDS-->
<?php get_sidebar();?>
<?php get_footer();?> 