<?php

/**
 * Class Tribe__Events__Importer__File_Importer_Venues
 */
class Tribe__Events__Importer__File_Importer_Venues extends Tribe__Events__Importer__File_Importer {

	protected $required_fields = array( 'venue_name' );

	protected function match_existing_post( array $record ) {
		$name = $this->get_value_by_key( $record, 'venue_name' );
		$id   = $this->find_matching_post_id( $name, Tribe__Events__Main::VENUE_POST_TYPE );

		return $id;
	}

	protected function update_post( $post_id, array $record ) {
		$venue = $this->build_venue_array( $post_id, $record );
		Tribe__Events__API::updateVenue( $post_id, $venue );
	}

	protected function create_post( array $record ) {
		$venue = $this->build_venue_array( false, $record );
		$id    = Tribe__Events__API::createVenue( $venue );

		return $id;
	}

	private function build_venue_array( $venue_id, array $record ) {
		$venue_address         = trim( $this->get_value_by_key( $record, 'venue_address' ) . ' ' . $this->get_value_by_key( $record, 'venue_address2' ) );
		$featured_image_record = $this->get_value_by_key( $record, 'featured_image' );
		$post_thumbnail_id     = get_post_thumbnail_id( $venue_id );
		$featured_image        = $post_thumbnail_id ? $post_thumbnail_id : $this->featured_image_uploader( $featured_image_record )->upload_and_get_attachment();
		$venue                 = array(
			'Venue'         => $this->get_value_by_key( $record, 'venue_name' ),
			'Description'   => $this->get_value_by_key( $record, 'venue_description' ),
			'Address'       => $venue_address,
			'City'          => $this->get_value_by_key( $record, 'venue_city' ),
			'Country'       => $this->get_value_by_key( $record, 'venue_country' ),
			'Province'      => $this->get_value_by_key( $record, 'venue_state' ),
			'State'         => $this->get_value_by_key( $record, 'venue_state' ),
			'Zip'           => $this->get_value_by_key( $record, 'venue_zip' ),
			'Phone'         => $this->get_value_by_key( $record, 'venue_phone' ),
			'URL'           => $this->get_value_by_key( $record, 'venue_url' ),
			'ShowMap'       => $venue_id ? get_post_meta( $venue_id, '_VenueShowMap', true ) : 'true',
			'ShowMapLink'   => $venue_id ? get_post_meta( $venue_id, '_VenueShowMapLink', true ) : 'true',
			'FeaturedImage' => $featured_image,
		);
		
		if ( empty( $venue['Country'] ) ) {
			$venue['Country'] = 'United States';
		}

		$venue = apply_filters( 'tribe_events_importer_venue_array', $venue, $record, $venue_id, $this );

		return $venue;
	}
}
