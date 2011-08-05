<?php get_header(); ?>
<div id="UIContent">   

<?php
		global $wp_query;
		$cat_ID = get_query_var('cat'); 
		if ($cat_ID ){
			
			$this_category = get_category($cat_ID);
			$parent = $this_category->category_parent;
			$this_category1 = get_category($parent);
			$parent1=$this_category1->category_parent;
		}
if($parent==3|| $parent1==3||$cat_ID==3 && is_category('3')) {
 include (TEMPLATEPATH . '/category-congtrinh.php'); 
} 
else {
include (TEMPLATEPATH . '/category-news.php');
}

 ?>

	   
</div>
<?php get_footer(); ?>

