<?php
if ( function_exists('register_sidebar') )
    register_sidebars(2,array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div><!--/widget-->',
        'before_title' => '<h2 class="hl">',
        'after_title' => '</h2>',
    ));
	
	function show_avatar($comment, $size)
	{				
	 $email=strtolower(trim($comment->comment_author_email));
	 $rating = "G"; // [G | PG | R | X]
	 
	 if (function_exists('get_avatar')) {
      echo get_avatar($email, $size);
   } else {
      
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   }		
	}
	?>