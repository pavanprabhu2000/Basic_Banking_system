<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'newbanking');
$name1 = $_SESSION['name'];
$q = "select name from users where not name='$name1'";
$result = mysqli_query($con, $q);
?>
<html>

<head>
  <title>Thunder Bank</title>
  <link rel="stylesheet" href="button.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }

        li {
          float: left;
        }

        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 10px;
          text-decoration: none;
        }

        li a:hover {
          background-color: #111;
        }

        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 10px;
        }
      </style>
    </div>
    <center>
      <div class="view">
        <br><br>
        <h2 style=" font-size:45px;color:#01050d;">Transfer Amount</h2>
        <form action="checkcredit.php" class="w3-container w3-teal" method="post">
          <div class="border">
            <table>
              <tr>
                <td style="font-size:12pt;color:#010114;">
                  <label>Receiver Name</label>
                  &nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                      <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
                    <?php } ?>
                </td>
              </tr>
              <br>
              <tr>
                <td>
                  <br><label for="transfer">Amount:</label>
                  &nbsp; &nbsp; &nbsp; &nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="button w3-center">
                    <button type="submit" value="Credit" style="color:black;font-size:18px;height:40px; width:100px;">Transfer</button>

                  </div>
                </td>
              </tr>
            </table>
          </div>
        </form>
      </div><br>
      <form action="user.php" method="post">
        <div class="buttons">
          <button class="glow-on-hover button w3-center" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
        </div>
        <style>
          .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;

            text-align: center;

            font-size: 30px;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
          }
        </style>
      </form>
    </center>
</body>

</html>