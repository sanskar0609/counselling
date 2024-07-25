<?php
$servername = "localhost";
$username = "myapp"; // replace with your database username
$password = "321"; // replace with your database password
$dbname = "college_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, college_name, branch, general, college_type, city, sc FROM colleges";
$result = $conn->query($sql);
if (!$result) {
  die("Error executing query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global1.css" />
    <link rel="stylesheet" href="./user.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Myanmar+Sans+Pro:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@1,700&display=swap" />
  </head>
  <body>
    <div class="iphone-8-2">
      <table class="parent">
        <thead>
          <tr>
            <th class="td">sr.no</th>
            <th class="td">college name</th>
            <th class="td">branch</th>
            <th class="td">cutoff</th>
            <th class="td">college type</th>
            <th class="td">city</th>
            <th class="td">link</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td class='td'>" . $row["id"]. "</td>
                          <td class='td'>" . $row["college_name"]. "</td>
                          <td class='td'>" . $row["branch"]. "</td>
                          <td class='td'>" . $row["general"]. "</td>
                          <td class='td'>" . $row["college_type"]. "</td>
                          <td class='td'>" . $row["city"]. "</td>
                          <td class='td'>" . $row["sc"]. "</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='7'>0 results</td></tr>";
          }
          $conn->close();
          ?>
        </tbody>
      </table>
      <div class="frame-parent" id="main">
        <button class="submit-wrapper" id="submit">
          <div class="submit">submit</div>
        </button>
        <div class="component-24-parent">
          <div class="component-24">
            <input class="component-24-child" id="cty" value="city" type="text" />
            <div class="select-cast">Enter percentage</div>
          </div>
          <div class="component-24">
            <select class="city-wrapper" required="true" id="cty">
              <option value="select city">city</option>
            </select>
            <div class="select-cast">Select City</div>
          </div>
          <div class="component-24">
            <select class="city-wrapper" required="true" id="clgt">
              <option value="select type">select type</option>
            </select>
            <div class="select-cast2">SELECT COLLEGE TYPE</div>
          </div>
          <div class="component-24">
            <select class="city-wrapper" id="clg">
              <option value="select caste">select caste</option>
            </select>
            <div class="select-cast">select caste</div>
          </div>
          <div class="component-24">
            <select class="city-wrapper" required="true" id="clg">
              <option value="select branch">select branch</option>
            </select>
            <div class="select-cast">Branch</div>
          </div>
        </div>
      </div>
      <div class="home">
        <i class="home1">cut off</i>
      </div>
      <img class="iphone-8-2-child" id="logo2" alt="" src="./public/ellipse-5@2x.png" />
      <img class="iphone-
