<?php

session_start();

$result = 0;

if(isset($_POST['add']))
    $result = $_POST['num1'] + $_POST['num2'];
elseif(isset($_POST['subtract']))
    $result = $_POST['num1'] - $_POST['num2'];
elseif(isset($_POST['multiply']))
    $result = $_POST['num1'] * $_POST['num2'];
elseif(isset($_POST['divide']))
    $result = $_POST['num1'] / $_POST['num2'];
elseif(isset($_POST['exp']))
    $result = pow($_POST['num1'],$_POST['num2']);

if(isset($_SESSION['result']))
    if(isset($_POST['memplus']))
        $result = $_SESSION['result'] + $_POST['num1'];
    elseif(isset($_POST['memminus']))
        $result = $_SESSION['result'] - $_POST['num1'];
    elseif(isset($_POST['reset']))
        session_unset();


$_SESSION['result'] = $result;

?>

<html>
<head>
    <title>
        ADVWEB1 Exercise #6
    </title>
</head>
<body>
<p>
    <b>Calculator</b><br>
<form action="calc.php" method="post">
    <input type="number" name="num1"><br>
    <input type="number" name="num2"><br><br>
    <input type="submit" name="add" value="+">&nbsp;
    <input type="submit" name="subtract" value="-">&nbsp;
    <input type="submit" name="multiply" value="*">&nbsp;
    <input type="submit" name="divide" value="/"><br>
    <input type="submit" name="memplus" value="M+">&nbsp;
    <input type="submit" name="memminus" value="M-">&nbsp;
    <input type="submit" name="reset" value="MC"><br>
    <input type="submit" name="exp" value="x&#8319;">
</form>
</p>
<p>
    <b>
        Result: <?php echo $result; ?><br>
        Memory: <?php echo $_SESSION['result']; ?>
    </b>
</p>
<br>
<p>
    How to use:<br><br>
    Input two numbers and press the appropriate mathematical operation.<br>
    For exponents, enter the base number on the first input and the exponent on the second input.<br>
    Use the first input also for Memory+ and Memory- operations.
</p>
</body>
</html>