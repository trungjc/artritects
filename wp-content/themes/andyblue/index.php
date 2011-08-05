<?php get_header(); ?>
<div id="UIContent">                           
	<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>    
    <?php include (TEMPLATEPATH . '/left-sidebar.php'); ?>
    <div class="UIMain">
        <div class="slideshow">
                <div class="moduletable_slideshow">
                  <?php include (ABSPATH."wp-content/flashfader/flashfaderhtml.txt");  ?>    
                 </div>        
        </div>
        <div class="moduletable_menu1">
        	<div class="BGmiddle">
               <?php
              	  echo '<ul class=" qcategoriescategory" >';
                 echo "<h3 class='fontpage componentheading'>Dịch Vụ Thuê Xe</h3>";
				
                 foreach( get_categories('hide_empty=0&parent='.get_theme_option('cat1')) as $cat ) :			 
                    $category_id = get_cat_ID( $cat->name );
                    $category_link = get_category_link( $category_id );
                    $categoryimg= $cat->slug ;
                    echo '<li >';
					
                ?>
				<a class="category" href="<?php echo $category_link ?>">	<img width="110"  src="<?php echo get_home_url(); ?>/wp-content/uploads/2011/07/<?php echo $cat->slug ; ?>.jpg" alt="<?php echo $cat->slug; ?>" />
              	  </a>
                    <a href="<?php echo $category_link ?>" > <?php echo $cat->name; ?><a />                
                <?php 
                echo '</li >';
                 endforeach;
                echo '</ul >';
                ?>
						</div>        
        </div>
        <div class="moduletable_menu1">
      	  <div class="BGmiddle">
					<ul class="listCategory">
					<?php
     		   echo "<h3 class='fontpage componentheading'>Thông Tin Hữu Ích - Thông Tin Khuyến Mại</h3>";
     		   $my_query = new WP_Query('cat='.get_theme_option('cat2').'&showposts=6');
    		    while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;?>
    		   	 <?php $articleimg = get_post_meta($post->ID, 'featured', $single = true); ?>
    		   	 <li>
							<a class="thumb" href="<?php the_permalink();?>"><?php if(has_post_thumbnail()) {the_post_thumbnail();}?></a>
        			<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
							</h4>
        				<?php the_excerpt_max_charlength(100); ?>
       			 </li>    
      		  <?php endwhile; ?>
					</ul>
        <?php wp_reset_query(); ?>
					</div>
        </div>
    
        <div class="moduletable_menu1 ">
            <div class="BGmiddle"><?php
        		echo '<ul class="relative " >';
        		echo "<h3 class='fontpage componentheading'>Thông Tin Khác</h3>";
        		$my_query = new WP_Query('cat='.get_theme_option('cat3').'&showposts=15');
        		while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;?>
        			<li>
       					 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>        
       				 </li>
        
        		<?php endwhile; ?>
        		</ul>
        		<?php wp_reset_query(); ?>
        	</div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

