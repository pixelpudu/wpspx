<?php
if (!defined( 'ABSPATH' ) ) die( 'Forbidden' );

/*
 * Spektrix checkout template
 *
 * To overwrite this template copy this file to your theme under /wpspx/wpspx-checkout.php
 *
 */

 get_header();

?>

<div class="showcard">

	<?php
	$spektrix_iframe_url = new iFrame('Checkout',NULL,true);
	echo $spektrix_iframe_url->render_iframe();
	?>

</div>

<?php get_footer(); ?>
