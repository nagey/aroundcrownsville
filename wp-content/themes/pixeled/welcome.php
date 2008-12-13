<div id="welcome">


<?php
$mysitename = get_bloginfo('name');
$mysitefeed = get_bloginfo('rss2_url');

 if (get_option('greeting') || get_option('welcomemessage')) {
  if (get_option('greeting')) {
    echo "<h2>" . get_option('greeting') . "</h2>";
    }
  if (get_option('welcomemessage')) {
    echo "<p>" . get_option('welcomemessage') . "</p>";
    }
  } else {
  echo "<h2>Howdy. Welcome to $mysitename!</h2><p>Thanks for dropping by! Feel free to join the discussion by leaving comments, and stay updated by subscribing to the <a href='$mysitefeed'>RSS feed</a>. See ya around!</p>";
}
 
?>



<?php
$mysitename = get_bloginfo('name');
$myfeedid = get_option('feedid');

 if (get_option('feedid')) {
  echo "

<p>You can also subscribe by email by filling the field below:</p>

<form action='http://www.feedburner.com/fb/a/emailverify' method='post' target='popupwindow' onsubmit=\"window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=$myfeedid', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\"><p><input type='text' name='email' id='feedbox' /><input type='hidden' value='http://feeds.feedburner.com/~e?ffid=$myfeedid' name='url'/><input type='hidden' value='$mysitename' name='title'/><input type='hidden' name='loc' value='en_US'/><input type='submit' value='Subscribe' class='submitbutton' /></p></form>


";
 }

 else {
  echo "";
 }
?>


</div><!-- Closes welcome -->