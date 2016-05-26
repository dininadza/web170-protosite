<!--aside content STARTS-->
<aside>

<!--begin sub navigation-->
<section id="sub-nav">

<?php 

register_nav_menus(array(
'main-menu' =>_('Main'),
));

?>
</section>


<!--end sub navigation-->


<!-- begin pull quotes-->
<section id="quotes">
<?php 
if (get_post_meta($post->ID, 'quote', true)):?>
<blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
 <?php endif;?>
</section>
<!--end pull quotes-->


<!--Begin dynamic widget-->
<section id="dynamic-widgets">
<?php dynamic_sidebar(); ?>
</section>
<!--end dynamic widget-->

</aside>
<!--aside content ENDS-->
