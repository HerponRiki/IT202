<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$payout_options = [];
$db = getDB();

//save
if (isset($_POST["title"]) && !empty($_POST["title"])) {
    $user_id = get_user_id();
    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;
    $cost += (int)se($_POST, "join_cost", 0, false);
    $title = se($_POST, "title", "N/A", false);
    $balance = get_credits($user_id);

    //makes it so they are empty ints
    $first_place_per = (int)se($_POST,"first_place_per", 0, false);
    $second_place_per = (int)se($_POST,"second_place_per", 0, false);
    $third_place_per = (int)se($_POST,"third_place_per", 0, false);

    error_log("$first_place_per, $second_place_per, $third_place_per");

    if ($balance >= $cost) {
        $db->beginTransaction();
        //checks if the total is equal to 100 
        if ($first_place_per + $second_place_per + $third_place_per != 100) {
            flash("The total amount exceeds the pool amount, please try again.");
            error_log("$first_place_per, $second_place_per, $third_place_per");
            //don't let the user continue
            return;
        } 

        if (change_credits(-$cost, "create_comp", get_user_id(), "Create Competition $title")) {
            $_POST["created_by"] = get_user_id();
            $comp_id = save_data("Comps", $_POST);
            if ($comp_id > 0) {
                if (add_to_competition($comp_id, get_user_id())) {
                    flash("Successfully created competition", "success");
                    $db->commit();
                } else {
                    $db->rollback();
                }
            } else {
                $db->rollback();
            }
        } else {
            flash("There was a problem deducting points", "warning");
            $db->rollback();
        }
    } else {
        flash("You can't afford this right now", "warning");
    }
}
?>

<div class="container-fluid">
    <h1>Create Competition</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" name="title" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Starting Reward</label>
            <input id="reward" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="0" />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Min. Score</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Min. Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="jc" class="form-label">Join Cost</label>
            <input id="jc" name="join_fee" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in Days)</label>
            <input id="duration" name="duration" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="po" class="form-label">Payout Option</label>
            <input type="number" name="first_place_per" />
            <input type="number" name="second_place_per" />
            <input type="number" name="third_place_per" />

        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function updateCost() {
            let starting = parseInt(document.getElementById("credits").value || 0) + 1;
            let join = parseInt(document.getElementById("jc").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting + join;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>