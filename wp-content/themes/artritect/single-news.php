<?php get_header(); ?>
<?php
//Get the Thumbnail URL
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tinyscrollbar.min.js"></script>

 <div id="UIContent">           
  <?php include (TEMPLATEPATH . '/left-sidebar-news.php'); ?>
	
    <div class="UIMain"> 
			<div id="scrollbar1" class="MainCotent single  categoryDefault">	<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="PostSingleDefault viewport">
				<div class="PostContent overview">
                	<div class="TopPost">
					<h2><a  href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>                    
				</div>         
                    <div class="PostContent">        
                    	<p><?php the_content(); ?></p>
				</div>
				</div>
			</div>			
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        	<p style="padding:10px"><?php echo "Không tìm thấy bài viết ..."; ?></p>
		<?php endif; ?> 
			</div>
            
            
    </div>
</div>




<?php get_footer(); ?>

