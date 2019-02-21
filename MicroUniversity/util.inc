<?php
function safeParam($key, $default) {
    if (isset($_POST[$key]) && $_POST[$key] != "") {
        return htmlentities($_POST[$key]);
    } else if (isset($_GET[$key]) && $_GET[$key] != "") {
        return htmlentities($_GET[$key]);
    } else {
        return $default;
    }
}

function debug($something) {
    print "<div class='debug'>\n";
    print_r($something);
    print "</div>\n";
}

function redirect($to) {
    header('Location: ' . $to);
    exit();
}

$siteName = 'Simple Blog';
