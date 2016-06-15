/**
 * @package   Responsive Category Slider
 * @author     ThemeLead Team <support@themelead.com>
 * @copyright  Copyright 2014 themelead.com. All Rights Reserved.
 * @license    Theme Lead white label license - http://themelead.com/themelead-terms-and-conditions/
 *
 * Websites: http://www.themelead.com
 * Technical Support:  Dedicated Support - http://themelead.com/dedicated-support/
 */
function b_load_option_widget(value, alt){
	
	jQuery("p.b_widget_hide").hide();
	var value_type = value;
	if(value_type == 'category'){
		jQuery("p#category_select_"+alt).show();
	}
	else if(value_type == 'taxonomy'){
		jQuery("p#custom_post_select_"+alt).show();
		jQuery("p#taxonomy_select_"+alt).show();
		jQuery("p#taxonomy_id_"+alt).show();
	}
	else {
		jQuery("p#list_tag_fill_"+alt).show();
	}
}