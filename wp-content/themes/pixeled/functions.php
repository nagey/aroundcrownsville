<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name'=>'sidebar_full',
        'before_widget' => '<li id="%1$s" class="sidebaritem"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar_left',
        'before_widget' => '<li id="%1$s" class="sidebaritem"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar_right',
        'before_widget' => '<li id="%1$s" class="sidebaritem"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'footer_left',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
	'name'=>'footer_middle',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
	'name'=>'footer_right',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


add_action('admin_menu', 'add_welcome_interface');

function add_welcome_interface() {
  add_theme_page('welcome', 'Theme Options', '8', 'functions', 'editoptions');
  }

function editoptions() {
  ?>
  <div class='wrap'>
  <h2>Theme Options</h2>
  <form method="post" action="options.php">
  <?php wp_nonce_field('update-options') ?>
  <p><strong>Greeting Heading:</strong></p>
  <p><input type="text" name="greeting" value="<?php echo get_option('greeting'); ?>" /></p>
  <p><strong>Welcome Message:</strong></p>
  <p><textarea name="welcomemessage" cols="100%" rows="10"><?php echo get_option('welcomemessage'); ?></textarea></p>
  <p><strong>Please enter your FeedBurner ID below: </strong>(What's your ID? Answer: after enabling email subscriptions at FeedBurner (under Publicize), you can find your feed ID easily by looking at the number that shows up in the address bar, which once you are logged into your feed should end with id=XXXXXXX. You can also see it in the code generated for your email subscription form.)</p>
  <p><input type="text" name="feedid" value="<?php echo get_option('feedid'); ?>" /></p>
  <p><input type="submit" name="Submit" value="Update Options" /></p>
  <input type="hidden" name="action" value="update" />
  <input type="hidden" name="page_options" value="feedid,greeting,welcomemessage" />
  </form>
  </div>
  <?php
  }

?>