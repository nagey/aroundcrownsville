<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div id="widgetswrap"><div id="widgetsposts">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
