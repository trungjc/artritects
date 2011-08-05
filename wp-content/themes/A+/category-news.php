<?php get_header(); ?>
<div id="UIContent">                             
    <?php include (TEMPLATEPATH . '/left-sidebar-news.php'); ?>
    <div class="UIMain">

			<div class="MainCotent category ">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="Post">
				
				<div class="PostContent">
                
                    	<a class="thumb" href="<?php the_permalink();?>">  <?php if(has_post_thumbnail()) {the_post_thumbnail(array(114,85));}?></a><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt_max_charlength(90); ?></p>
						<a href="<?php the_permalink() ?>" class="readmore"></a>
				
				</div>
			</div>			
		<?php endwhile; ?>
			<div class="ClearLeft"><span></span></div>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        		<p style="padding:10px"><?php echo "không tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?> 
			</div>
    </div>
</div>
<?php get_footer(); ?>

