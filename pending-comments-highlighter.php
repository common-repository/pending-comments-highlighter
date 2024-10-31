<?php
/*
Plugin Name: Pending Comments Highlighter
Plugin URI: http://www.olcsoweboldal.hu/blog/2011/01/10/pending-comments-highlighter/
Description: This plugin overrides the default pending comments background color in WordPress admin.
Author: Adam "Mahone" Szucs
Version: 1.5
Author URI: http://olcsoweboldal.hu
*/

function pending_comments_highligher() {
?>
	<style type="text/css">
	tr.unapproved th, tr.unapproved td {background-color:#DD823B !important;}
	tr.unapproved p, tr.unapproved strong {color:#FFFFFF !important;}
	tr.unapproved a, tr.unapproved strong {color:#000000 !important;}
	</style>
<?php	
}
add_action('admin_head', 'pending_comments_highligher');
?>