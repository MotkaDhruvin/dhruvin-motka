<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ques3_mod3</title>
</head>
<body>

<form method="post">
    <lable>Enter number A : </lable><input type="text" name="A"><br>
    <lable>Enter number B : </lable><input type="text" name="B"><br>
    <lable>Enter number C : </lable><input type="text" name="C"><br>
    <button name="btn">Submit</button><br><br>
</form>
    
</body>
</html>

<?php 
if($_REQUEST['A']>$_REQUEST['B'] && $_REQUEST['A']>$_REQUEST['C'])
{
    echo "A is the largest number";
}

else if($_REQUEST['B']>$_REQUEST['A'] && $_REQUEST['B']>$_REQUEST['C'])
{
    echo "B is the largest number";
}

else if($_REQUEST['C']>$_REQUEST['A'] && $_REQUEST['C']>$_REQUEST['A'])
{
    echo "C is the largest number";
}

?>