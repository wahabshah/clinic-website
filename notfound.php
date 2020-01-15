<?php
header("HTTP/1.0 404 Not Found");
require('header_pre.php');
?>
<title id="page_title">Error Page not found</title>
<meta name="description" content="Error 404 Page not found">
<meta name="keywords" content="">
<?php
require('header_post.php');
?>
<article id="main">
<h1>
Page not found!
</h1>
<div id="#error">
<!--Script for 404 Error from Google -->
<script type="text/javascript">
  var GOOG_FIXURL_LANG = 'en';
  var GOOG_FIXURL_SITE = 'http://www.nazeefdentalclinic.info'
</script>
<script type="text/javascript"
  src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js">
</script>
</div>
</article>
<?php
require('footer.php');
?>