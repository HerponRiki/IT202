<?php

function get_top_scores_for_comp($comp_id, $limit = 10)
{
    $db = getDB();
    //below if a user can win more than one place
    $stmt = $db->prepare(
        "SELECT score, s.created, username, u.id as user_id FROM Scores s 
    JOIN UserComps uc on uc.user_id = s.user_id 
    JOIN Comps c on c.id = uc.comp_id
    JOIN Users u on u.id = s.user_id WHERE c.id = :cid AND s.score >= c.min_score AND s.created 
    BETWEEN uc.created AND c.expires ORDER BY s.score desc LIMIT :limit"
    );
    //Below if a user can't win more than one place
    //get score, user_id, created, then use dense rank to rank the scores of each user
    //outer query pulls rank 1 for each user (their best)
    //I join accounts here so I can repurpose this to payout winners. Acade project would just use the user's id.
    /*
    $stmt = $db->prepare("SELECT * FROM (SELECT s.user_id, s.score,s.created, a.id as account_id, DENSE_RANK() OVER (PARTITION BY s.user_id ORDER BY s.score desc) as `rank` FROM Scores s
    JOIN UserComps uc on uc.user_id = s.user_id
    JOIN Comps c on uc.comp_id = c.id
    JOIN RM_Accounts a on a.user_id = s.user_id
    WHERE c.id = :cid AND s.created BETWEEN uc.created AND c.expires
    )as t where `rank` = 1 ORDER BY score desc LIMIT :limit"); */
    $top = [];
    try {
        $stmt->bindValue(":cid", $comp_id, PDO::PARAM_INT);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $top = $r;
        }
    } catch (PDOException $e) {
        flash("There was a problem fetching scores, please try again later", "danger");
        error_log("List competition scores error: " . var_export($e, true));
    }
    return $top;
}