<?php
function refresh_account_balance($user_id)
{
    if (is_logged_in()) {
        //cache account balance via Credit history
        $query = "UPDATE Users set credits = (SELECT IFNULL(SUM(diff), 0) from CreditHistory 
        WHERE user_id = :user_id) where id = :user_id";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":user_id" => $user_id]);
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing credit balance", "danger");
        }
    }
}