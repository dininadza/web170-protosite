<!--aside content STARTS-->
<aside>
<?php 
if(is_page()){
	
if($post->post_parent) { 

echo '<h2>'.get_the_title($post->post_parent). '</h2>'; 
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
?>
</aside>
<!--aside content ENDS-->
