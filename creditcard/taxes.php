<?php
session_start();



?>

<form method="post" action="card.php">
    
<?php
      $subtotal = $_SESSION["totalcost"];
      $tax = $_SESSION["totalcost"] * .045;
      
      $total = $subtotal + $tax;
      
      echo "Subtotal: $subtotal <br> ";
   
      echo "Tax: $tax <br> ";
      echo "Total: $total  <br>";
      
      
      
?>

<input type="submit" name="submit" value="Next &gt;">

</form>