<?php get_header(); ?>
<?php
//Get the Thumbnail URL
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

?>
<div id="UIContent">          
  <?php include (TEMPLATEPATH . '/left-sidebar-congtrinh.php'); ?>
    <div class="UIMain"> 
			<div class="MainCotent single">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		<div class="PostContent PostContents">        
           	<?php the_content(); ?>
		</div>		
		<?php endwhile; ?><?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        	<p style="padding:10px"><?php echo "không tồn tại bài viết."; ?></p>
		<?php endif; ?> 
			</div>
            
            
    </div>
</div>


<?php get_footer(); ?>

