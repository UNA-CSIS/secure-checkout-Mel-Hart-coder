<?php
session_start();

// sasve the form data into the seeison (fn + ln)
$_SESSION['item1'] = $_POST['item1'];
$_SESSION['item2'] = $_POST['item2'];
$_SESSION['item3'] = $_POST['item3'];

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>years</title>
</head>

<body>
    Scissors: <?=$_POST["item1"] ?> <br>
    Thread:  <?=$_POST["item2"] ?> <br>
    Needle: <?=$_POST["item3"] ?> <br>
  
<form method="post" action="taxes.php">
    
    <p>
        <?php
    $numScissor = $_POST["item1"];
         $numThread = $_SESSION["item2"];
         $numNeedle = $_SESSION["item3"];
        
        $totalScissor = $numScissor * 3;
        $totalThread = $numThread * .50;
        $totalNeedle = $numNeedle * .75;
        
        $total = $totalScissor + $totalThread + $totalNeedle;
        echo "You're total is $$total";
        
        $_SESSION["totalcost"] = $total;
     
?>

                
        
        
    </p>
    <p>
        <input type="submit" name="submit" value="Next &gt;">
    </p>
    
</form>
</body>
</html>
