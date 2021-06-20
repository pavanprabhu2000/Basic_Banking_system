<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'newbanking');
$q = "select *from mini_statement";
$result = mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html>

<head>
  <title>TRANSACTION HISTORY</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="w3-container w3-center  w3-panel">
    <h1 style=" font-family:Monospace; font-size: 80px; color:#82E0AA;text-shadow: 2px 2px black;"> THUNDER BANK </h1>
  </div>
</head>

<body>
  <div class="box">
    <div class="w3-bar w3-blue w3-large">
      <ul>
        <li><a class="w3-bar-item w3-button" href="home.php">HOME</a></li>
        <li><a class="w3-bar-item w3-button" href="index.php" class="active">VIEW USER</a></li>
        <li><a class="w3-bar-item w3-button" href="transfer.php">TRANSFER</a></li>
        <li><a class="w3-bar-item w3-button" href="transaction.php">ALL TRANSACTION</a></li>
      </ul>
    </div>
    <div class="w3-main">
      <h1>TRANSACTION HISTORY</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">SENDER</th>
            <th scope="col">RECIEVER</th>
            <th scope="col">AMOUNT</th>
          </tr>
          <tr>

            <?php while ($row = $result->fetch_assoc()) { ?>

          <tr>
            <td><?php echo $row["sender"]; ?></td>
            <td><?php echo $row["receiver"]; ?></td>
            <td><?php echo $row["amount"]; ?></td>
          </tr>
        <?php } ?>
      </table>
      <br>
      <br>
      <form action="index.php" method="post">
        <div class="buttons">
          <button class="glow-on-hover" type="submit" name="name">BACK</button>
        </div>
      </form>

</body>

</html>