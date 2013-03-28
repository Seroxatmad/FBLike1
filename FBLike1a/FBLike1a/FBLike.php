<?php
/**
 * 
 * Place <var>printFBLike()</var> in your theme's image.php file where you want it to appear.
 *		Something like <?php if (function_exists('printFBLike')) { ?>
 *		<div class="rating"><?php printFBLike(); ?></div>
 *		<?php  } ?>
 *
 * 
 */

$plugin_is_filter = 13|THEME_PLUGIN;
$plugin_description = gettext('Inserts a FaceBook <i>Like Button</i> on an Image page.');
$plugin_author = "John Stott (seroxatmad)";
$plugin_version = '1.4.3.beta';

zp_register_filter('theme_body_open','FBLikeJS');

	function FBLikeJS() { ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php } 

	function printFBLike() { ?>
	<div class="fb-like" data-href="<?php echo html_encode(getMainSiteURL()); ?><?php echo html_encode(getImageLinkURL()); ?>" data-send="false" data-width="450" data-show-faces="false" data-font="verdana"></div>
	<?php } ?>

