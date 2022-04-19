<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>
    
    <li><a href="<?php echo get_url('gameScript.php'); ?>">Play the game!</a></li>
    <?php
    //this is day which is the default
    require(__DIR__ . "/../../partials/score_table.php");
    ?>
    <?php
    $duration = "week";
    require(__DIR__ . "/../../partials/score_table.php");
    ?>
    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/score_table.php");
    ?>
    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/score_table.php");
    ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>