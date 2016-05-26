<?php
 
 /*
Theme Name: Paper PR wordpress demo for web170
Author: Dini Nadza
Author URI: http://www.dininadza.com/
Description: This is a wordpress website for Paper PR
Version: 1.0
*/

//register navigation menus
register_nav_menus(array(
'main-menu' => _('Main'), 
)); 
//


//register sub nav 
function my_subnavigation(){ 
global $post; 
if (is_page()) { 
	if ($post->post_parent){
		echo '<h2>'.get_the_title($post->post_parent).'</h2>';
		echo '<ul>';
wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); 
echo '<ul>';
} else {  
echo '<h2>'.get_the_title($post->ID).'</h2>';
echo '<ul>';
wp_list_pages(array('title_li' => '','child_of' => $post->ID,));
echo '</ul>';
}
}
if(!(is_page())){
	echo '<h2>Blog</h2>';
	echo '<ul>';
wp_list_categories(array('title_li' => '',)); 
echo '<ul>'; 
}
}
//

//register my sidebars
register_sidebar();
//


//make thumbnails 
add_theme_support('post-thumbnails'); 
//
?>