<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'left_sidebar',
'before_widget' => '<ul>',
'after_widget' => '</ul>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));
register_sidebar(array('name'=>'right_sidebar',
'before_widget' => '<ul>',
'after_widget' => '</ul>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));
register_sidebar(array('name'=>'top_sidebar',
'before_widget' => '<ul>',
'after_widget' => '</ul>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
}
function the_excerpt_max_charlength($charlength) {
   $excerpt = get_the_excerpt();
   $charlength++;
   if(strlen($excerpt)>$charlength) {
       $subex = substr($excerpt,0,$charlength-5);
       $exwords = explode(" ",$subex);
       $excut = -(strlen($exwords[count($exwords)-1]));
       if($excut<0) {
            echo substr($subex,0,$excut);
       } else {
       	    echo $subex;
       }
       echo "...";
   } else {
	   echo $excerpt;
   }
}
class ControlPanel {
	var $default_settings = Array(
	'latest_title'=> 'Latest News',
	);
	
	var $options;
	function ControlPanel() {
    	add_action('admin_menu', array(&$this, 'add_menu'));
		add_action('admin_head', array(&$this, 'admin_head'));
		if (!is_array(get_option('vnh')))
		add_option('vnh', $this->default_settings);
		$this->options = get_option('vnh');
	}
	function add_menu() {
	add_theme_page('VPress Settings', 'VPress Settings', 8, "vnh", array(&$this, 'optionsmenu'));
	}
	
	function admin_head() {

	}
	function optionsmenu() {
	if ($_POST['ss_action'] == 'save') {
	$this->options["inputCategoryDefault"] = $_POST['inputCategoryDefault'];
	$this->options["f_cat_posts"] = $_POST['f_cat_posts'];
	$this->options["t_cat"] = $_POST['t_cat'];
	$this->options["enable_scroll"] = isset($_POST['enable_scroll']) ? 1 : 0;
	$this->options["m_cat"] = $_POST['m_cat'];
	$this->options["latest_posts"] = $_POST['latest_posts'];
	$this->options["latest_title"] = $_POST['latest_title'];
	update_option('vnh', $this->options);
	echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 790px; margin:0 0 10px;"><p>Thay đổi  <strong>thanh cong</strong>.</p></div>';
	}
?>
	<div class="wrap">
    <form action="" method="post" class="themeform">
		<input type="hidden" id="ss_action" name="ss_action" value="save">
    <div class="icon32" id="icon-options-general"><br/></div><h2>Cấu Hình</h2>
    <div class="cptab">
    <ul class="tab idTabs"> 
     	<li><a href="#tab2"><h3><?php _e('Settings','vnh')?></h3></a></li> 
    </ul> 

    <div id="tab2">       
          <label>chon category cho dạng defaul</label>      <input type="text" value="<?php echo stripslashes($this->options["inputCategoryDefault"]); ?>" name="inputCategoryDefault" />
       <hr/>
        <!--main categories-->
        <fieldset class="nw-field" style="height:200px;" >
        <legend class="nw-legend"></legend>
            <p>
			<?php _e('chọn Categories (*)','vnh')?><br class="clear" />
			
            <select multiple name="m_cat[]" id="m_cat" style="width:150px;height:120px;">
            <?php $categories = get_categories('hide_empty=0');
            foreach ($categories as $cat) {
            if ($this->options['m_cat'] && in_array($cat->cat_ID, $this->options['m_cat'])) { $selected = ' selected="selected"'; } else { $selected = ''; }
            $opt = '<option value="' . $cat->cat_ID . '"' . $selected . '>' . $cat->cat_name . '</option>';
            echo $opt; } ?>
            </select>
			<span>dùng phím crt để chọn nhiều </span>
            </p>
        </fieldset>
        <!--/main categories-->
    </div>
    </div>
    <script type="text/javascript"> 
	  $(".tab").idTabs("!mouseover"); 
		</script>
  </div>
	<br class="cleared" />
    <p class="submit" style="clear:both;">
    <input type="submit" value="Save Changes &raquo;" name="cp_save" class="dochanges" />
    </p>
	</form>
    </div>
<?php	}
}
$cpanel = new ControlPanel();
$mytheme = get_option('vnh');
?>