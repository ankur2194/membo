<?php

/**
 * @package GoBlue Advance Settings
 * @author Ankur Patel <ankur2194@gmail.com>
 * @license Commercial
 * @link https://www.softlab24.com/license/commercial
 */

  ossn_load_external_js('places.min');
  ossn_load_external_js('jquery.tokeninput'); 
?>
<div class="tabs-input">
    <div class="wall-tabs">
        <?php
			echo ossn_view_menu('wall/container/group', 'wall/menus/container'); 
		?>
    </div>
</div>
<div class="ossn-wall-container-data ossn-wall-container-data-post" data-type="post">
    <textarea placeholder="<?php echo ossn_print('wall:post:container'); ?>" name="post"></textarea>
    <div id="ossn-wall-location" style="display:none;">
        <input type="text" placeholder="<?php echo ossn_print('enter:location'); ?>" name="location" id="ossn-wall-location-input" />
    </div>
    <div id="ossn-wall-photo" style="display:none;">
        <input type="file" name="ossn_photo" />
    </div>
    <div id="ossn-wall-video" style="display:none;">
        <input type="text" placeholder="Title of Video" name="video_title" id="ossn-wall-video_title-input"/>
        <input type="file" name="ossn_video"/>
    </div>
    <div class="controls">
        <?php
			echo ossn_view_menu('wall/container/controls/group', 'wall/menus/container_controls'); 
		?>      
        <div style="float:right;">
            <div class="ossn-loading ossn-hidden"></div>
            <input class="btn btn-primary ossn-wall-post" type="submit" value="<?php echo ossn_print('post'); ?>" />
        </div>
    </div>
	 <input type="hidden" value="<?php echo $params['group']['group']->guid; ?>" name="wallowner"/>
</div>
