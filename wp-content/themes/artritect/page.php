<?php get_header(); ?>
<div id="UIContent">                            
	<div class="navboxwrapleft">
	<ul class="MenuLeft">
  <?php   $page = get_query_var('page_id');
	 if ($page!=0) {
	 wp_list_pages('child_of='.$page.'&title_li=' ); 
	 }
	 if($page!=12 && $page!=0) {
	 wp_list_pages('exclude=12&title_li=' ); 
	 }?>
	</ul>
</div>
    <div class="UIMain"> 
			<div class="MainCotent single">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class=" PostSingleDefault">
				<div class="PostContent ">
                <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <a class="thumb2" href="<?php the_permalink();?>">  <?php if(has_post_thumbnail()) {the_post_thumbnail();}?></a>
					<div class="post-excerpt">
                    	<p><?php the_content(); ?></p>
					
					</div>
				</div>
			</div>			
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        	<p style="padding:10px"><?php echo "không tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?> 
			</div>
            
            
    </div>
</div>
<?php get_footer(); ?>

