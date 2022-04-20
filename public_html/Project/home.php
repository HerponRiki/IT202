<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>
    <p style = "text-align:center; font-size:160%; font-family:courier;"> 
    Welcome to Simple Shooter! Shoot the enemy blocks and aim for the top of the leaderboard! <br>
    Press <b>SPACE</b> to shoot <br>
    To move up, press the <b>W or UP ARROW</b> key <br>
    To move down, press the <b>S or DOWN ARROW</b> key<br>
    Ready to play? <br>
    <a href="<?php echo get_url('gameScript.php'); ?>">Play the game!</a> 
    </p>    
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