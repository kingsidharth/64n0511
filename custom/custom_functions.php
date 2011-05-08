<?php



/*---------------- Add your code above this line ------------
 * Copyright (c) 2011 King Sidharth. All Rights Reserved.
 * Do not remove the attribution in footer.
 * Contact: king@kingsidharth.com for more details.
 *
 * Index
 * 1. Head Scripts
 * 2. Header
 * 3. Attribution
 */

// 1. Head Scripts
function head_scripts(){ ?>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,500,500italic,bold,bolditalic' rel='stylesheet' type='text/css'>
<?php }
add_action('wp_head', 'head_scripts');

//2. Header
remove_action('thesis_hook_before_header', 'thesis_nav_menu');
add_action('thesis_hook_header','thesis_nav_menu');

//3. Remove Attribution + Footer
remove_action('thesis_hook_footer', 'thesis_attribution');
function custom_footer(){ ?>
  <p>
  <a href="">64n0511</a> thesis child theme, made by <a href="http://www.kingsidharth.com">King Sidharth</a> for <a href="http://64notes.com">64 Notes</a>.
<?php }
add_action('thesis_hook_footer','custom_footer');


