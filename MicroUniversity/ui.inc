<?php
function head($title="Default") {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="content">
<?php
} // ends head function

function foot() {
?>
        </div><!-- content div -->
        <div id="debug"></div>
    </body>
</html>
<?php
}
