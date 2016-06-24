<?php


	class Tribe__Events__Asset__Events_Css_Default extends Tribe__Events__Asset__Abstract_Events_Css {

		public function handle( array &$stylesheets, $mobile_break ) {
			$stylesheets['tribe-events-full-calendar-style'] = 'tribe-events-full.css';
			$stylesheets['tribe-events-calendar-style'] = 'tribe-events-theme.css';
			if ( $mobile_break > 0 ) {
				$stylesheets['tribe-events-calendar-full-mobile-style'] = 'tribe-events-full-mobile.css';
				$stylesheets['tribe-events-calendar-mobile-style'] = 'tribe-events-theme-mobile.css';

			}
		}
	}