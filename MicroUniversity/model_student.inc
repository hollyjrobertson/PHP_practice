<?php
include_once 'db.inc';

function findStudentById($id) {
    global $db;
    $st = $db -> prepare('SELECT * FROM STUDENT WHERE STU_NUM = ?');
    $st -> bindParam(1, $id);
    $st -> execute();
    return $st -> fetch(PDO::FETCH_ASSOC);
}

function findStudentByName($lname, $fname) {
    global $db;
    $lname = "%{$lname}%";
    $fname = "%{$fname}%";
    $st = $db -> prepare('SELECT * FROM STUDENT WHERE STU_LNAME LIKE ? AND STU_FNAME LIKE ? ORDER BY STU_LNAME, STU_FNAME');
    $st -> bindParam(1, $lname);
    $st -> bindParam(2, $fname);
    $st -> execute();
    $rows = $st -> fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function findAllStudents($limit = 0, $offset = 0) {
    global $db;
    $query = 'SELECT * FROM STUDENT ORDER BY STU_LNAME, STU_FNAME' . ($limit ? " LIMIT $limit" : '') . ($offset ? " OFFSET $offset" : '');
    $st = $db -> prepare($q);
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
