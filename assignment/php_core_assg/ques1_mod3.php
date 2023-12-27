<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ques1_mod3</title>
</head>
<body>

        <p>Marks Calculator</p>

        <form action="" method="post">
        <label>Physics marks</label><input type="text" placeholder="" name="phymarks"><br>
        <label>Chemistry marks</label><input type="text" placeholder="" name="chemarks"><br>
        <label>Maths marks</label><input type="text" placeholder="" name="mathmarks"><br>
        <label>English marks</label><input type="text" placeholder="" name="engmarks"><br>
        <label>Computer marks</label><input type="text" placeholder="" name="compmarks"><br>
        <button name="btn">calculate average marks</button>


        </form>
    
</body>
</html>

<?php

if(isset($_REQUEST['btn']))
{
    $avg = (($_REQUEST['phymarks']+$_REQUEST['chemarks']+$_REQUEST['mathmarks']+$_REQUEST['engmarks']+$_REQUEST['compmarks'])/5);
    echo "Average marks is $avg<br>";

    if($avg>90)
    {
        echo "Grade is A";
    }
    else if($avg>70 && $avg<=90)
    {
        echo "Grade is B";
    }
    else if($avg>50 && $avg<=70)
    {
        echo "Grade is C";
    }
    else if($avg>45 && $avg<=50)
    {
        echo "Grade is D";
    }
    else if($avg>33 && $avg<=45)
    {
        echo "Grade is E";
    }
    else if($avg<=33)
    {
        echo "Grade is FAIL";
    }


}

?>

<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "Switch case problem : ";
echo "<br>";
$num=4;

switch ($num) {
    
        case '1':
            echo "Monday";
            break;
                case '2':
                echo "Tuesday";
                break;
                case '3':
                    echo "Wednesday";
                    break;
                case '4':
                    echo "Thursday";
                    break;
                    case '5':
                        echo "Friday";
                        break;
                        case '6':
                            echo "Saturday";
                            break;
                            case '7':
                                echo "Sunday";
                                break;
    
    
    default:
       echo "Enter valid input";
        break;
}





?>