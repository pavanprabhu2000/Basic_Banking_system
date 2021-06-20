<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'newbanking');
$q = "select name from users";
$result = mysqli_query($con, $q);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TRANSFER</title>
  <link rel="stylesheet" href="button.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="w3-container w3-center  w3-panel">
    <h1 style=" font-family:Monospace; font-size: 80px; color:#82E0AA;text-shadow: 2px 2px black;"> THUNDER BANK </h1>
  </div>

  <script>
    function random_function() {
      var a = document.getElementById("input").value;
      if (a === "Avinash") {
        var arr = ["Harshal", "Prathamesh", "Ajay", "Vaishali", "Monika", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Harshal") {
        var arr = ["Avinash", "Prathamesh", "Ajay", "Vaishali", "Monika", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Prathamesh") {
        var arr = ["Avinash", "Harshal", "Ajay", "Vaishali", "Monika", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Ajay") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Vaishali", "Monika", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Vaishali") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Monika", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Monika") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Vaishali", "Ravina", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Ravina") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Vaishali", "Monika", "Nishant", "Avdhut", "Rushi"];
      } else if (a === "Nishant") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Vaishali", "Monika", "Ravina", "Avdhut", "Rushi"];
      } else if (a === "Avdhut") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Vaishali", "Monika", "Ravina", "Nishant", "Rushi"];
      } else if (a === "Rushi") {
        var arr = ["Avinash", "Harshal", "Prathamesh", "Ajay", "Vaishali", "Monika", "Ravina", "Nishant", "Avdhut"];
      }
      var string = "";

      for (i = 0; i < arr.length; i++) {
        string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
      }
      document.getElementById("output").innerHTML = string;
    }
  </script>
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
</head>

<body>
  <div class="w3-bar w3-blue w3-large">
    <ul>
      <li><a class="w3-bar-item w3-button" href="home.php">HOME</a></li>
      <li><a class="w3-bar-item w3-button" href="index.php" class="active">VIEW USER</a></li>
      <li><a class="w3-bar-item w3-button" href="transfer.php">TRANSFER</a></li>
      <li><a class="w3-bar-item w3-button" href="transaction.php">ALL TRANSACTION</a></li>

    </ul>
  </div>
  <center>
    <h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">TRANSFER AMOUNT</h1><br>
    <div class="center">
      <form action="updatecredit.php" method="post">
        <label for="sender" align="left">Senders Name: &nbsp;</label>
        <select id="input" name="sender" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
          <option selected>Select Name</option>
          <option value="Avinash">Avinash</option>
          <option value="Harshal">Harshal</option>
          <option value="Prathamesh">Prathamesh</option>
          <option value="Ajay">Ajay</option>
          <option value="Vaishali">Vaishali</option>
          <option value="Monika">Monika</option>
          <option value="Ravina">Ravina</option>
          <option value="Nishant">Nishant</option>
          <option value="Avdhut">Avdhut</option>
          <option value="Rushi">Rushi</option>
        </select><br><br>
        <label for="receiver" align="left">Receiver Name:&nbsp;</label>
        <select id="output" name="receiver" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
          <option>Select Name</option>
        </select><br><br>

        <label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
        <input type="number" name="transfer" style="font-size: 20pt; height: 30px; width:285px;" align="middle" required><br><br>
        <div>
          <input class="button" type="submit" name="submit" value="Transfer">


        </div>
      </form>
    </div><br><br><br>

    <a href="index.php">
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
      <button>BACK</button>
    </a>

  </center>
</body>

</html>