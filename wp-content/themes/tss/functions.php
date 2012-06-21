<?php
/**
 *
 */

 function wftp_flush_rewrite() {
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
function wftp_vars($public_query_vars) {
	$public_query_vars[] = 'article';
	$public_query_vars[] = 'provider';
    return $public_query_vars;
}
function wftp_add_rewrite_rules($wp_rewrite) {
  $new_rules = array(
	 'about-pfsm/(.+)' => 'index.php?pagename=about-pfsm&article=' . $wp_rewrite->preg_index(1),
	 'issuestreatments/(.+)' => 'index.php?pagename=issuestreatments&article=' . $wp_rewrite->preg_index(1),
	 'provider/(.+)' => 'index.php?pagename=provider&provider=' . $wp_rewrite->preg_index(1),	 
	 );
  $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('init', 'wftp_flush_rewrite');
add_filter('query_vars', 'wftp_vars');
add_action('generate_rewrite_rules', 'wftp_add_rewrite_rules');

 
 
 
 
 ?>