<div class="navboxwrapleft">
<div class=" Boxs">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left_sidebar') ) : ?>
	<?php endif; ?>
  	<?php global $wp_query;
$cat_ID = get_query_var('cat'); 
echo $cat_ID;
if ($cat_ID!='') {
echo "<ul>";
 wp_list_categories('hide_empty=0&child_of='.$cat_ID.'&title_li='); ?> 
</ul>

<?php
$this_category = get_category($cat_ID);
$parent = $this_category->category_parent;
$this_category1 = get_category($parent);
$parent1=$this_category1->category_parent;
if($parent==3|| $parent1==3) {
	 wp_list_categories('hide_empty=0&child_of=3&title_li='); 
} 
if($parent==4|| $parent1==4) {
	 wp_list_categories('hide_empty=0&child_of=4&title_li='); 
} 

?>
 <?php   } ?>
 
 <?php 
  $page = get_query_var('page_id');
 if ($page!=0) {
 wp_list_pages('child_of='.$page.'&title_li=' ); 
 }
 if($page!=12 && $page!=0) {
 wp_list_pages('exclude=12&title_li=' ); 
 }
   ?> 

</div>
</div>
