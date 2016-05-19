<?php get_header(); ?>
<section class="aboutUs">
<article id="content">
<?php 
//if theres post - while post, get the id of the post
if(have_posts()) : while(have_posts()) : the_post(); //start loop 1 that pulls the SEO text ?>
<article id="post-<?php the_ID();?>" class="postings">
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author();?> in <?php the_category(', '); ?></small>
<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
<?php the_excerpt();?>
</article>
<?php endwhile; endif;?>
<p>index.php</p>
</article>
<!--main content ENDS-->
<?php get_sidebar(); ?>
<?php get_footer();?> 