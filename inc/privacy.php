<?php
/**
 * Functions for privacy, data export, and erasure.
 *
 * @package WordCamp\Post_Types\Privacy
 */

namespace WordCamp\Post_Types\Privacy;

defined( 'WPINC' ) || die();

add_filter( 'wp_privacy_personal_data_exporters', __NAMESPACE__ . '\register_personal_data_exporters' );
add_filter( 'wp_privacy_personal_data_erasers', __NAMESPACE__ . '\register_personal_data_erasers' );


function register_personal_data_exporters( $exporters ) {
	$exporters['wcb_speaker'] = array(
		'exporter_friendly_name' => __( 'WordCamp Speaker Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\speaker_personal_data_exporter',
	);

	$exporters['wcb_sponsor'] = array(
		'exporter_friendly_name' => __( 'WordCamp Sponsor Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\sponsor_personal_data_exporter',
	);

	$exporters['wcb_organizer'] = array(
		'exporter_friendly_name' => __( 'WordCamp Organizer Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\organizer_personal_data_exporter',
	);

	return $exporters;
}


function speaker_personal_data_exporter( $email_address, $page ) {}


function sponsor_personal_data_exporter( $email_address, $page ) {}


function organizer_personal_data_exporter( $email_address, $page ) {}


function register_personal_data_erasers( $erasers ) {
	$erasers['wcb_speaker'] = array(
		'exporter_friendly_name' => __( 'WordCamp Speaker Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\speaker_personal_data_eraser',
	);

	$erasers['wcb_sponsor'] = array(
		'exporter_friendly_name' => __( 'WordCamp Sponsor Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\sponsor_personal_data_eraser',
	);

	$erasers['wcb_organizer'] = array(
		'exporter_friendly_name' => __( 'WordCamp Organizer Data', 'wordcamporg' ),
		'callback'               => __NAMESPACE__ . '\organizer_personal_data_eraser',
	);

	return $erasers;
}


function speaker_personal_data_eraser( $email_address, $page ) {}


function sponsor_personal_data_eraser( $email_address, $page ) {}


function organizer_personal_data_eraser( $email_address, $page ) {}
