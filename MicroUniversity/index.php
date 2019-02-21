<?php
include_once 'ui.inc';
include_once 'util.inc';
include_once 'model_student.inc';

$fname = safeParam('fname', '');
$lname = safeParam('lname', '');

head("Find students");
?>
<h1>Find a student</h1>
<form action="index.php" method='post'>
    <fieldset>
        <legend>
            Find a student
        </legend>
        <div class='inputs'>
            <label for='fname'>First name:</label>
            <input type='text' id='fname' name='fname' size='60' value='<?php echo $fname ?>' />
            <label for='lname'>Last name:</label>
            <input type='text' id='lname' name='lname' size='60' value='<?php echo $lname ?>' />
            <input type='submit' value='Submit' />
        </div>
    </fieldset>
</form>
<div class='display'>
    <?php
    if ($lname || $fname) {
        $rows = findStudentByName($lname, $fname);
        print "<table><tr><th>First</th><th>Last</th></tr>\n";
        foreach ($rows as $row) {
            print "<tr><td>{$row['STU_FNAME']}</td><td><a href=\"view_student.php?id={$row['STU_NUM']}\">{$row['STU_LNAME']}</a></td></tr>\n";
        }
        print "</table>";
    }
    ?>
</div>
<?php
foot();
?>
