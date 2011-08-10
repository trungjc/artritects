<?php get_header(); ?>   
<div id="UIContent">                             
    <?php include (TEMPLATEPATH . '/left-sidebar-congtrinh.php'); ?>
    <div class="UIMain">
    	<?php		
		$tem=0;
	$main_cat = $mytheme['m_cat'];
	if (is_array($main_cat)) {
		foreach ($main_cat as $mcat) {			
			if ($mcat==get_query_var('cat')){ 
				$tem=1 ;break;
			}		
		}
	}
	if ($tem==1) { ?>
			<div class="MainCotent  categoryCT1">
				<ul>
		<?php if (have_posts()) :?>
		<?php
		$marginleft=array(0,0,122,242,476,118,0,241,123);
		$i=0;
		$limit=8;
		?>
		<?php while (have_posts()) : the_post(); $i++;?>
        <?php if ( $i < $limit + 1 ): ?>
		    <li class="Post postCT" style="float:left; <?php if ($i==6) echo "clear:left";?>" >
				<h2 style="display:none"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>								 				<?php if(has_post_thumbnail()) {?>
					<a class="thumb1" style="float:left;display:block;margin-left:<?php echo $marginleft[$i]; ?>px" href="<?php the_permalink();?>">
					<?php the_post_thumbnail();
				} ?>
				</a>
				<?php if(!has_post_thumbnail()){ ?>
				  <a class="thumb1" style="float:left;display:block;margin-left:<?php echo $marginleft[$i]; ?>px" href="<?php the_permalink();?>"><img  src="<?php bloginfo('template_directory'); ?>/images/no_image.gif " />
				<?php }	?>
                </a>
				
			</li>	
            <?php endif; ?>	
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        		<p style="padding:10px"><?php echo "không tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?>
		</ul>
			</div>
		<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>	
	<?php } 
	elseif ($tem==0){?>
	<div class="MainCotent carousel11  categoryCT">
        <div class="jCarouselLite11">
             <ul class="jcarol2" id="foo2">
             </ul>
        </div>
    	<div class="list_carousel SlideShow ">
		<ul id="foo">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>			
            <li class="Post postCT">								
					<h2 style="display:none"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>  <?php if(has_post_thumbnail()) {?>							
                        <a class="thumb1" style="float:left;display:block;margin-left:<?php echo $marginleft[$i]; ?>px" href="<?php the_permalink();?>">
						<?php	the_post_thumbnail();							
							} ?></a>
						<?php if(!has_post_thumbnail()){ ?>
							  <a class="thumb1" style="float:left;display:block;margin-left:<?php echo $marginleft[$i]; ?>px" href="<?php the_permalink();?>"><img width="223" height="167" src="<?php bloginfo('template_directory'); ?>/images/no_image.gif " alt="<?php the_title(); ?>" />
							<?php } ?></a>
			
			</li>			
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php else : ?>
        		<p style="padding:10px"><?php echo "không tồn tại bài viết nào mời bạn xem mục khác."; ?></p>
		<?php endif; ?>
		</ul>
        <div class="clearfix"></div>
		<div id="timer1" class="timer">
        </div>
		</div>
		<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>	
	<?php }	?>             
    </div>
</div>
<?php get_footer(); ?>

