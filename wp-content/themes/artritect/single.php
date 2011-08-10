<?php get_header();
global $post;
$thePostID = $post->ID;
$categories = get_the_category(thePostID);
foreach($categories as $x){
 $tem= $x->cat_ID;	
}
$this_category1 = get_category($tem);
$parent11=$this_category1->category_parent;
$this_category2 = get_category($parent11);
$parent22=$this_category2->category_parent;
if ($parent22==0) $parent22=$parent11;
if($parent22==3) { 
 include (TEMPLATEPATH . '/single-congtrinh.php'); 
} 
else  {?>
  <?php 	include (TEMPLATEPATH . '/single-news.php'); ?>
	
<?php } 

?>

<?php get_footer(); ?>

