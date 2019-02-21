<!DOCTYPE html>
<html>
<head>
    <title>Forms & PHP</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <!---Text Form-->
   <div>
        <h3>Text</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <label>User Name:</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <input type="hidden" name="action" value="login">
            <input type="submit" name="submit">
        </form>
    </div>
    <!---Radio Form-->
    <div>
        <h3>Radio</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <input type="radio" name="card_type" value="visa">Visa<br>
            <input type="radio" name="card_type" value="mastercard">Mastercard<br>
            <input type="radio" name="card_type" value="discover">Discover<br>  
            <input type="submit" name="submit">  
        </form>
    </div>
    <!---CheckBox Form - one at a time-->
    <div>
        <h3>Single Checkbox</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <input type="checkbox" name="pep">Pepperoni<br>
            <input type="checkbox" name="mush">Mushrooms<br>
            <input type="checkbox" name="oli">Olives<br>
            <input type="submit" name="submit">
        </form>
    </div>
    <!---CheckBox Form - multiple-->
    <div>
        <h3>Multiple Checkbox</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <input type="checkbox" name="top[]" value="pepp">Pepperoni<br>
            <input type="checkbox" name="top[]" value="mush">Mushrooms<br>
            <input type="checkbox" name="top[]" value="oliv">Olives<br>
            <input type="submit" name="submit">
        </form>
    </div>
    <!--Drop-Down List-->
    <div>
        <h3>Drop-Down</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <select name="card_types">
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
                <option value="discover">Discover<br></option>
                <input type="submit" name="submit">
            </select>
        </form>
    </div>  
    <!--List Box-->
    <div>
        <h3>ListBox</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <select name="top[]" size="3" multiple>
                <option value="peppo">Peperoni</option>
                <option value="mushr">Mastercard</option>
                <option value="olive">Discover</option>
                <input type="submit" name="submit">
            </select>
        </form>
    </div>
    <!--Text Area-->
    <div>
        <h3>Text Area</h3>
        <form action="forms_php.php" method="post" accept-charset="utf-8">
            <textarea name="comment" rows="4" cols="50"></textarea><Br>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>