<?php
/*
Plugin Name: Blur Links
Plugin URI: http://theblaine.com
Description: Removes focus rectangle from links when clicked.
Author: Blaine Sherman
Version: 0.2.1
Author URI: http://theblaine.com
*/




function blurlinks() { ?>

<!-- Blur Links Wordpress Plugin created by Blaine Sherman http://theblaine.com -->
<script type="text/javascript">
	blurLinks();
	
	function blurLinks() {
		if (!document.getElementById) return;
		theLinks = document.getElementsByTagName("A");
		theAreas = document.getElementsByTagName("AREA");
		for(i=0; i<theLinks.length; i++) {theLinks[i].onfocus = unblur;}
		for(i=0; i<theAreas.length; i++) {theAreas[i].onfocus = unblur;}
	}
	
	function unblur() {
		this.blur();
	}
</script>

<? }



// load blurLinks after the page has loaded
// using wp_footer hook

add_action('wp_footer', 'blurlinks');
?>