<?php if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

/**
 * ------------------------------------------------------------------------------------------------
 * WPML Compatibility
 * ------------------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'woodmart_wpml_compatibility' ) ) {
	function woodmart_wpml_compatibility( $ajax_actions ) {
		$ajax_actions[] = 'woodmart_ajax_add_to_cart';
		$ajax_actions[] = 'woodmart_quick_view';
		return $ajax_actions;
	}
	add_filter( 'wcml_multi_currency_ajax_actions', 'woodmart_wpml_compatibility', 10, 1 );
}

if ( ! function_exists( 'woodmart_wpml_variation_gallery_data' ) ) {
	function woodmart_wpml_variation_gallery_data( $post_id_from, $post_id_to, $meta_key ) {
		if ( $meta_key == 'woodmart_variation_gallery_data' ) {
			$translated_lang  = apply_filters( 'wpml_post_language_details', '', $post_id_to );
			$translated_lang  = isset( $translated_lang['language_code'] ) ? $translated_lang['language_code'] : '';
			$original_value   = get_post_meta( $post_id_from, 'woodmart_variation_gallery_data', true );
			$translated_value = $original_value;
			if ( ! empty( $original_value ) && is_array( $original_value ) ) {
				foreach ( $original_value as $key => $value ) {
					$translated_variation_id = apply_filters( 'wpml_object_id', $key, 'product_variation', false, $translated_lang );
					
					$translated_value[ $translated_variation_id ] = $value;
					unset( $translated_value[ $key ] );
				}
				update_post_meta( $post_id_to, 'woodmart_variation_gallery_data', $translated_value );
			}
		}
	}
	
	add_action( 'wpml_after_copy_custom_field', 'woodmart_wpml_variation_gallery_data', 10, 3 );
}