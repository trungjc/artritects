<?php get_header(); ?>
 <div id="UIContent">                            
	<div class="navboxwrapleft">
	<ul class="MenuLeft">
  <?php include (TEMPLATEPATH . '/left-sidebar-congtrinh.php'); ?>
	</ul>
</div>
    <div class="UIMain"> 
			<div class="MainCotent single">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="Post">
				<div class="TopPost">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="PostContent">
                
					<div class="post-excerpt">
                    	<p><?php the_content(); ?></p>
					
					</div>
				</div>
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

