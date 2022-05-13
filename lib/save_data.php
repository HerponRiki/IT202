<?php
function save_data($table, $data, $ignore = ["submit"]) {
    $table = se($table, null, null, false);
    $db = getDB();
    $query = "INSERT INTO $table";
    $columns = array_filter(array_keys($data), function($x) use ($ignore){
        return !in_array($x, $ignore);
    });

    $placeholders = array_map(fn ($x) => ":$x", $columns);
    $query .= "(" . join(",", $columns) . ") VALUES (". join(",", $placeholders) . ")";

    $params = [];
    foreach ($columns as $col) {
        $params[":$col"] = $data[$col];
    }

    $stmt = $db -> prepare($query);

    try {
        $stmt -> execute($params);
        return $db->lastInsertID();
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("An error occurred saving data for table $table", "danger");
    }
}
