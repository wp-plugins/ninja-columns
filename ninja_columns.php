<?php
/*
	Plugin Name: Ninja Columns
	Description: The plugin will allow users to easily split content into columns using short-codes. It is aimed at developers so it doesn't come with any CSS or JavaScript, it just ads the DIVs for the columns, the rest is up to the developer's imagination.
	Version: 1.0
	Author: Ninjas for Hire
	Author URI: http://www.ninjasforhire.co.za
*/
	
	// see if content has shortcode
	function ninja_has_shortcode($shortcode = '', $content) {
		$found = false;
		if ( stripos($content, '[' . $shortcode) !== false ) {
			$found = true;
		}
		return $found;
	}
	
	// do shortcode
	function shortcode_column() {
		$columns = '</div><div class="ninja_col">';
		return $columns;
	}
	add_shortcode("columnbreak", "shortcode_column");
	
	// prepend and append to the_content
	function ninja_the_content( $content ) {
		
		$id = get_the_ID();
		
		// ad wrapping div if shortcode used
		if ( ninja_has_shortcode('columnbreak', $content) ) {
			$content =  '<div class="ninja_columns colsid_'.$id.'"><div class="ninja_col">'.$content;
			$content .= '</div></div>';
		}
		
		return $content;
		
	}
	add_filter( 'the_content', 'ninja_the_content' );
	
	
?>