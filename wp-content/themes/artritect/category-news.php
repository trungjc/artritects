<?php get_header(); ?>
<div id="UIContent">                             
    <?php include (TEMPLATEPATH . '/left-sidebar-news.php'); ?>
    <div class="UIMain">
			<div class="MainCotent category ">
        <?php
		$i=0;
		$limit=4;
		?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); $i++;?>
			 <?php if ( $i < $limit + 1 ): ?>
            <div class="Post">				
				<div class="PostContent">                
                  
                     <?php if(has_post_thumbnail()) {?>
						  <a class="thumb" href="<?php the_permalink();?>">  <?php the_post_thumbnail(array(114,85)); ?></a>
					<?php }?>
                      <?php if(!has_post_thumbnail()) {?>
						  <a class="thumb" href="<?php the_permalink();?>"> 
                          	<img  src="<?php bloginfo('template_directory'); ?>/images/no_image.gif " />
                          </a>
					<?php }?>
                     <h2>                    
                    	 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
					  <p><?php the_excerpt_max_charlength(90); ?></p>
					   <a href="<?php the_permalink() ?>" class="readmore"></a>				
				</div>
			</div>		
          
            <?php endif; ?>	
           
		<?php endwhile; ?> 
			
		<?php wp_reset_query(); ?>
		<?php else : ?>
        		<p style="padding:10px"><?php echo "không tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?> 
			</div><?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
    </div>
</div>
<?php get_footer(); ?>

