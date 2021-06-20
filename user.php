<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'newbanking');
$name = $_POST['name'];
$q = "select * from users where name='$name'";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$mail = $row['email'];
$amount = $row['amount'];
$_SESSION['name'] = $name;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Thunder Bank</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="w3-container w3-center  w3-panel">
    <h1 style=" font-family:Monospace; font-size: 80px; color:#82E0AA;text-shadow: 2px 2px black;"> THUNDER BANK </h1>
  </div>
</head>

<body>
  <div class="box">
    <div class="w3-bar w3-green w3-large">
      <ul>
        <li><a class="w3-bar-item w3-button" href="home.php">HOME</a></li>
        <li><a class="w3-bar-item w3-button" href="index.php" class="active">VIEW USER</a></li>
        <li><a class="w3-bar-item w3-button" href="transfer.php">TRANSFER</a></li>
        <li><a class="w3-bar-item w3-button" href="transaction.php">ALL TRANSACTION</a></li>
      </ul>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Amount</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <?php $row = mysqli_fetch_array($result); ?>
          <td><?php echo $name ?></td>
          <?php $row = mysqli_fetch_array($result); ?>
          <td><?php echo $mail ?></td>
          <?php $row = mysqli_fetch_array($result); ?>
          <td><?php echo $amount ?></td>


        </tr>
      </tbody>
    </table>

  </div>
  <br>
  <br>
  <div class="buttons w3-center">
    <a href="transfer_to.php">
      <button> Transfer To</button>
      <style>
        button {
          background-color: #4CAF50;
          /* Green */
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 50px;
          box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
      </style>
    </a>
  </div>
  <br>
  <br>
</body>

</html>