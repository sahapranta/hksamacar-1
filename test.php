
How can I check if PHP on my webserver supports sessions?
leave a comment »

The simplest way to check if sessions are enabled on your PHP installation is with the phpinfo(); command:

<?php phpinfo(); ?>

This generates a table with an overview of all PHP settings on your server.

To check if sessions really work you can use this code:

<?php
// Start Session
session_start();
// Show banner
echo '<b>Session Support Checker</b><hr />';
// Check if the page has been reloaded
if(!isset($_GET['reload']) OR $_GET['reload'] != 'true') {
   // Set the message
   $_SESSION['MESSAGE'] = 'Session support enabled!<br />';
   // Give user link to check
   echo '<a href="?reload=true">Click HERE</a> to check for PHP Session Support.<br />';
} else {
   // Check if the message has been carried on in the reload
   if(isset($_SESSION['MESSAGE'])) {
      echo $_SESSION['MESSAGE'];
   } else {
      echo 'Sorry, it appears session support is not enabled, or you PHP version is to old. <a href="?reload=false">Click HERE</a> to go back.<br />';
   }
}
?>