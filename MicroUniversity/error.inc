<?php
include_once 'ui.inc';
include_once 'util.inc';

function errorPage($title, $exception) {
    head($title);
    print "<h1>$title</h1>\n";
    print "<p>Problem: {$exception->getMessage()}.</p>";
    foot();
}
