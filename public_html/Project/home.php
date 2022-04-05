<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
//to test is it php -S localhost:3000 -t public_html
//website is http://localhost:3000/Project/register.php
is_logged_in(true);
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>