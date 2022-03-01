<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
//to test is it php -S localhost:3000 -t public_html
//website is http://localhost:3000/Project/register.php
if (is_logged_in()) {
    echo "Welcome home, " . get_user_email();
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
} else {
    echo "You're not logged in";
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>