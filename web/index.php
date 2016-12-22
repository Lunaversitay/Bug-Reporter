<!DOCTYPE HTML>
<html>
<head>
    <title>Bug Reports</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<br>
<br>
<br>
<br>
<center><table border="2">
        <tr>
            <td colspan="2">Bug Reports and Suggestions</td>
        </tr>
        <tr>
            <td><b><i>SteamID</i></b></td>
            <td><b><i>Bug Description</i></b></td>
        </tr>
        <?php
        $connection = new mysqli("localhost", "user", "password", "db_table");

        $result = mysqli_query($connection, "SELECT SteamID,BugReport FROM bug_report");

        while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
            echo "<tr>" . "<td>" . $row['SteamID'] . "</td>" . "<td>" . $row['BugReport'] . "</td>" .  "</tr>" . "<br>"; 
        }

        mysqli_close($connection); //Make sure to close out the database connection
        ?>
    </table></center>
</body>

<footer>
    <center><p>&copy;2016 Subject_Alpha</p></center>
</footer>
</html>
