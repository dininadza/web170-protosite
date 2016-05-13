<!--aside content STARTS-->
<aside>
<img src="<?php bloginfo('template_directory');?>/images/team.jpg" alt="company motto" class="companyinfo"/>
<ul>
<?php 

if(is_page()){
if($post->post_parent) { 
echo '<h2>'.get_the_title($post->post_parent). '</h2>'; 
echo '<ul>';
wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); 

echo '<ul>';
} else {  
wp_list_pages(array('title_li' => '','child_of' => $post->ID,));
}

if(!(is_page())){
	
	echo '<h2>Blog</h2>';
	echo '<ul>';
wp_list_categories(array('title_li' => '',)); 
echo '<ul>'; 
}
?>
</ul>
</aside>
<!--aside content ENDS-->
</section>