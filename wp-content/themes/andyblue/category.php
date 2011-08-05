<?php get_header(); ?>
<div id="UIContent">                           
	<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>    
    <?php include (TEMPLATEPATH . '/left-sidebar.php'); ?>
    <div class="UIMain">
	<?php global $wp_query;
$cat_ID = get_query_var('cat'); echo $cat_ID ?>
			<div class="MainCotent category">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="Post">
				<div class="TopPost">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="PostContent">
					<div class="post-excerpt">
                    	<a class="thumb1" href="<?php the_permalink();?>">  <?php if(has_post_thumbnail()) {the_post_thumbnail();}?></a>
						<p><?php the_excerpt_max_charlength(100); ?></p>
						<a href="<?php the_permalink() ?>" class="readmore">Chi tiết...</a>
					</div>
				</div>
			</div>			
		<?php endwhile; ?>
			<div class="ClearLeft"><span></span></div>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        		<p style="padding:10px"><?php echo "khôn tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?> 
			</div>
    </div>
</div>
<?php get_footer(); ?>

