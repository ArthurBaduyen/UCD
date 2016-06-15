/**
 * @package   Responsive Category Slider
 * @author     ThemeLead Team <support@themelead.com>
 * @copyright  Copyright 2014 themelead.com. All Rights Reserved.
 * @license    Theme Lead white label license - http://themelead.com/themelead-terms-and-conditions/
 *
 * Websites: http://www.themelead.com
 * Technical Support:  Dedicated Support - http://themelead.com/dedicated-support/
 */
jQuery(document).ready(function() {
 
	jQuery('#b_upload_background_image_button').click(function() {
	 formfield = jQuery('#b_upload_image').attr('name');
	 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});
	 
	window.send_to_editor = function(html) {
	 imgurl = jQuery('img',html).attr('src');
	 jQuery('#b_upload_image').val(imgurl);
	 tb_remove();
	}

});