<div class="navboxwrapleft">
	<ul class="MenuLeft">
		<?php 
		$ID = $mytheme['inputCategoryDefault'];
		$pieces = explode(",", $ID);
		for($i=0;$i<count($pieces);$i++){
				if ($cat_ID==$pieces[$i]){
						wp_list_categories('hide_empty=0&child_of='.$cat_ID.'&title_li='); 
						break;
				}
				elseif ($parent==$pieces[$i]){
						wp_list_categories('hide_empty=0&child_of='.$parent.'&title_li='); 
						break;
				}elseif ($parent1==$pieces[$i]){
						wp_list_categories('hide_empty=0&child_of='.$parent1.'&title_li='); 
						break;
				}elseif ($parent22==$pieces[$i]){
						wp_list_categories('hide_empty=0&child_of='.$parent22.'&title_li='); 
						break;
				}
				
			}
				
		?> 
	</ul>
</div>
