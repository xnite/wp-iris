<?php
/*
Plugin Name: WP-IRIS
Plugin URI: https://github.com/xnite/wp-iris
Description: Allows you to embed an IRIS IRC client with a shortcode.
Version: 1.0
Author: Robert Whitney &lt;<a href="mailto:xnite@xnite.org">xnite@xnite.org</a>&gt;
Author URI: http://xnite.org
License: http://xnite.org/copyright#code
*/

function iris_embed_func($atts) {
	extract(shortcode_atts(array(
		'width'				=> '95%',
		'height'			=> '450px',
		'clientpath'		=> 'http://irc-source.com:8080',
		'nickprefix'		=> 'WP-IRIS_',
		'channel'			=> 'lobby',
		'prompt'			=> 1,
		'fgca'				=> '000000',
		'fgcb'				=> '888888',
		'bgc'				=> 'ffffff'
	), $atts));
	return '<iframe style="width:'.$width.';height:'.$height.';border:0;" src="'.$clientpath.'/?nick='.$nickprefix.'....&channels='.urlencode($channel).'&fg_color='.$fgca.'&fg_sec_color='.$fgcb.'&bg_color='.$bgc.'&prompt='.$prompt.'"></iframe>';
}
add_shortcode('iris', 'iris_embed_func');
?>