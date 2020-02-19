<?php
if (!defined( 'ABSPATH' ) ) die( 'Forbidden' );

add_shortcode( 'wpspx_book_online', 'wpspx_load_book_online' );
function wpspx_load_book_online()
{
	$performance = get_query_var('performance');
	
	if(strpos($performance,'event') === 0):
		$pieces = explode('-',$performance);
		$spektrix_iframe_url = new iFrame('EventDetails',array('EventId' => $pieces[1]));
	else:
		$spektrix_iframe_url = new iFrame('ChooseSeats',array('EventInstanceId' => $performance));
	endif;

	echo $spektrix_iframe_url->render_iframe();
}
