<?php
include_once 'ui.inc';
include_once 'util.inc';
include_once 'model_student.inc';
include_once 'model_employee.inc';

$id = safeParam('id', '');
$student = findStudentById($id);
$advisor = findEmployeeById($student['EMP_NUM']);

function alwaysOutput($something) {
    print $something ? $something : '&nbsp;';
}

head("View student");
?>
<h1>View a student</h1>
<div class='display'>
    <label>First name:</label>
    <div><?php alwaysOutput($student['STU_FNAME']); ?></div>
    <label>Last name:</label>
    <div><?php alwaysOutput($student['STU_LNAME']); ?></div>
    <label>Middle initial:</label>
    <div><?php alwaysOutput($student['STU_INITIAL']); ?></div>
    <label>Birthdate:</label>
    <div><?php alwaysOutput($student['STU_DOB']); ?></div>
    <label>Credits:</label>
    <div><?php alwaysOutput($student['STU_HRS']); ?></div>
    <label>Class:</label>
    <div><?php alwaysOutput($student['STU_CLASS']); ?></div>
    <label>Department:</label>
    <div><?php alwaysOutput($student['DEPT_CODE']); ?></div>
    <label>Phone:</label>
    <div><?php alwaysOutput($student['STU_PHONE']); ?></div>
    <label>Advisor:</label>
    <div><?php alwaysOutput("{$advisor['EMP_FNAME']} {$advisor['EMP_LNAME']}"); ?></div>
</div>
    <a href="."><< Back</a>
<?php
foot();
?>
