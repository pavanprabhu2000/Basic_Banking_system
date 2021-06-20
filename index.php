<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'newbanking');

$q = "select * from users ";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);


?>


<!DOCTYPE html>
<html>

<head>
  <title>Thunder Bank</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="w3-container w3-center  w3-panel">
    <h1 style=" font-family:Monospace; font-size: 80px; color:#82E0AA;;text-shadow: 2px 2px black;"> THUNDER BANK </h1>
  </div>
</head>

<body>
  <div class="container-fluid">
    <div class="w3-bar w3-blue w3-large">
      <ul>
        <li><a class="w3-bar-item w3-button" href="home.php">HOME</a></li>
        <li><a class="w3-bar-item w3-button" href="index.php" class="active">VIEW USER</a></li>
        <li><a class="w3-bar-item w3-button" href="transfer.php">TRANSFER</a></li>
        <li><a class="w3-bar-item w3-button" href="transaction.php">ALL TRANSACTION</a></li>
      </ul>
    </div>
    <div class="w3-main">
      <h1>USERS</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 1</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Avinash">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 2</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Harshal">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 3</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Prathamesh">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 4</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Ajay">View</button>
              </form>
            </td>


          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 5</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Vaishali">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 6</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Monika">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php

            $row = mysqli_fetch_array($result);
            ?>
            <td> 7</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Ravina">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 8</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Nishant">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 9</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Avdhut">View</button>
              </form>
            </td>
          </tr>
          <tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <td> 10</td>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["amount"]; ?></td>
            <td>
              <form action="user.php" method="post" class="view">
                <button class="button1" type="submit" name="name" value="Rushi">View</button>
              </form>
            </td>
          </tr>

        </tbody>
      </table>
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
          font-size: 10px;
          box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
      </style>


    </div>
  </div>
</body>

</html>