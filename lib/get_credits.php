<?php
function get_credits($user_id) {
    $query = "SELECT credits from Users WHERE id = :user_id"; 
    $db = getDB();
    $stmt = $db->prepare($query);

    try {
        $stmt->execute([":user_id" => $user_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int)se($r, "credits", 0, false);
    }
    catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("There was an error getting credits", "danger");
    }
    return 0;
}
/**
 * Points should be passed as a positive value.
 */
function change_credits($credits, $reason, $user_id, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    $query = "INSERT INTO CreditHistory (diff, reason, details, user_id) 
        VALUES (:diff, :reason, :details, :user_id)";

    //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
    $params[":reason"] = $reason;
    $params[":details"] = $details;
    $params[":diff"] = $credits;
    $params[":user_id"] = $user_id;

    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        //Only refresh the balance of the user if the logged in user's account is part of the transfer
        //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
        //occurs without a logged in user
       
        //refresh credit balance
        refresh_account_balance($user_id);
        return true;
    }
    catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("There was an error transfering credits", "danger");
    }

    return false;
}
