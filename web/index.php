<!DOCTYPE HTML>
<html>
	<head>
    	<title>3FX Bug Reports</title>
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
                <!--<td>Completion</td>-->
    		</tr>
    		<?php
    			$connection = mysql_connect("localhost", "user", "password");
    			mysql_select_db("db_table");

    			$query = "SELECT * FROM bug_report";
    			$result = mysql_query($query);

    			while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
        			echo "<tr>" . "<td>" . $row['SteamID'] . "</td>" . "<td>" . $row['BugReport'] . "</td>" .  "</tr>" . "<br>";  //$row['index'] the index here is a field name $row['Progress']
    			}

    			mysql_close(); //Make sure to close out the database connection
    		?>
		</table></center>
	</body>

	<footer>
    	<center><p>&copy;2016 Subject_Alpha</p></center>
	</footer>
</html>