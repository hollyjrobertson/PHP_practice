<?php
try {
    $db = new PDO('sqlite:MicroUniversity.db3');
} catch (PDOException $e) {
    include 'error.inc';
    errorPage("Database error", $e);
    exit();
}

function adHocQuery($q) {
    global $db;
    $st = $db -> prepare($q);
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
