<?php
/**
 * Plugin Name: Blog View Count
 * Plugin URI: http://wideopentech.com
 * Description: Records the view count of blog posts into the WP database
 * Version: 1.0
 * Author: Wide Open Technologies
 * Author URI: http://wideopentech.com
 */
 
 //secure
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
 
 
 
 function post_load(){
	 if(get_post_type() == 'post' && is_singular()){
	 	inc_view_count( get_the_ID() );
	 }
 } add_action('wp', 'post_load');
 
 
 function inc_view_count($post_id){
	$counts = get_post_meta($post_id, 'view_count', true);
	if(!$counts){
		$counts = 0;
	}
	update_post_meta($post_id, 'view_count', ++$counts);
 }
 
 
 function get_view_count($post_id){
	 if(!$post_id){
		 $post_id = get_the_ID();
	 }
	 $counts = get_post_meta($post_id, 'view_count', true);
	 if(!$counts){
		 $counts = 0;
	 }
	 return $counts;
 }
 
 function the_view_count(){
 	$counts = get_post_meta(get_the_ID(), 'view_count', true);
	 if(!$counts){
		 $counts = 0;
	 }
	 echo $counts;
 }
 
 
 ?>