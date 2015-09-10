<?php
  include("connect_db.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Young Innovation</title>
</head>

<body>

  

  <h1>Contracts</h1>
  <h3>
    <?php 
      if(isset($_SESSION['contractsMsg']))
      {
        echo $_SESSION['contractsMsg']; 
        unset($_SESSION['contractsMsg']);
      }
    ?>
  </h3>
  <form action="act.php" method="post">
    <input type="submit" name="submit_contract" value="Upload Contracts CSV">
  </form><br>
  
  <?php
    include("contracts.php");
  ?>

  <h1>Awards</h1>
  <h3>
    <?php
      if(isset($_SESSION['awardsMsg']))
      {
        echo $_SESSION['awardsMsg'];
        unset($_SESSION['awardsMsg']);
      }
    ?>
  </h3>
  <form action="act.php" method="post">
    <input type="submit" name="submit_award" value="Upload Awards CSV">
  </form><br>

  <?php
    include("awards.php");
  ?>

<br><a href="final.php" style="font-size:20px">final.csv</a><br>  
<br><a href="combine.php" style="font-size:20px">Combine contracts.csv and awards.csv</a><br>  

</body>

</html>
