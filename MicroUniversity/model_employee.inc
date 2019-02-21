<?php
include_once 'db.inc';

function findEmployeeById($id) {
    global $db;
    $st = $db -> prepare('SELECT * FROM EMPLOYEE WHERE EMP_NUM = ?');
    $st -> bindParam(1, $id);
    $st -> execute();
    return $st -> fetch(PDO::FETCH_ASSOC);
}
