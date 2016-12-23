<?php
// Edit this --->
$db_host = "";
$db_name = "";
$db_user = "";
$db_pass = "";
// Edit this <---
try{
$host = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($host, $db_user, $db_pass);
}
catch(PDOException $pdo_err){ ?>
    <h1 style="color:#c10000;">Error Caught:</h1>
    <h2><?= $pdo_err->getMessage() ?></h2>
  <?php die();
}
// Use PDO instead of MySQLi please.
$bug_report = $pdo->prepare("SELECT * FROM `bug_report`"); // Prepare all statements
$bug_report->execute(); // Execute it
$bug = $bug_report->fetchAll(PDO::FETCH_ASSOC); // Grab the data

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bug Reports</title>
</head>
<body>
  <div class="center-page">
    <div>
      <tbody>
      <table>
        <tr><td colspan="2">Bug Reports</td></tr>
        <tr>
          <td>SteamID</td>
          <td>Description</td>
        </tr>
  <?php foreach($bug as $bu=>$b): ?>
    <tr>
      <td>
        <?php echo $b['SteamID']; ?>
      </td>
      <td>
        <?php echo $b['BugReport']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<span class="credits">&copy; 2016 Subject_Alpha</span>
  </body>
</html>
