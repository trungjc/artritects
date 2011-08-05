<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tinyscrollbar.min.js"></script>

 <div id="UIContent">                            
	<div class="navboxwrapleft">
	<ul class="MenuLeft">
  <?php include (TEMPLATEPATH . '/left-sidebar-news.php'); ?>
	</ul>
</div>
    <div class="UIMain"> 
			<div id="scrollbar1" class="MainCotent single  categoryDefault">	<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="PostSingleDefault viewport">
				<div class="PostContent overview">
                		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>       
                    	<p><?php the_content(); ?></p>	
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

