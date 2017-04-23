<?php
        require("connect_db.php");
	$debug = false;
        show_users($dbc);

	function show_users($dbc) {
		$query = 'SELECT * FROM Users WHERE VendorInfo NOT LIKE "%(Unknown)%" ORDER BY Timestamp DESC';
		$results = mysqli_query($dbc, $query);

		# Output SQL errors, if any
		show_query($query);
    	check_results($results);

    	if ($results && mysqli_num_rows($results) > 0) {
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Timestamp</th>";
                        echo "<th>IP Address</th>";
			echo "<th>Mac Address</th>";
                        echo "<th>Vendor Info</th>";
                    echo "</tr>";
    		while ( $row = mysqli_fetch_array($results , MYSQLI_ASSOC )){
				echo "<tr>";
					echo "<td>" . $row['Timestamp'] . "</td>";
					echo "<td>" . $row['IPAddr'] . "</td>";	
					echo "<td>" . $row['MacAddr'] . "</td>";
					echo "<td>" . $row['VendorInfo'] . "</td>";
				echo "</tr>";
			}
                echo "</table>";
    	}
	}

	# Checks the query results as a debugging aid
	function check_results($results) {
		global $dbc;
	 	if($results != true)
	    	echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>';
	}
	# Shows query as a debugging aid
	function show_query($query) {
	  	global $debug;
	  	if($debug)
	    	echo "<p>Query = $query</p>" ;
	}

?>
