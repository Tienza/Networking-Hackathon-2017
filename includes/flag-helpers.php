<?php
        require("connect_db.php");
	$debug = false;
        show_flag_networks($dbc);

	function show_flag_networks($dbc) {
		$query = 'SELECT * FROM Network WHERE SSID NOT IN ("FoxNet","Marist Guest WiFi","Marist Windows WiFi Setup","airfox-event","eduroam") ORDER BY Timestamp DESC;';

		$results = mysqli_query($dbc, $query);

		# Output SQL errors, if any
		show_query($query);
    	check_results($results);

    	if ($results && mysqli_num_rows($results) > 0) {
                echo "<table>";
                    echo "<tr>";
                        echo "<th>SSID</th>";
                        echo "<th>Device Name</th>";
			echo "<th>MAC Address</th>";
                        echo "<th>Frquency</th>";
                        echo "<th>Quality</th>";
                        echo "<th>Strength</th>";
                        echo "<th>Timestamp</th>"; 
                    echo "</tr>";
    		while ( $row = mysqli_fetch_array($results , MYSQLI_ASSOC )){
				echo "<tr>";
					echo "<td>" . $row['SSID'] . "</td>";
					echo "<td>" . $row['DeviceName'] . "</td>";	
					echo "<td>" . $row['MacAddr'] . "</td>";
					echo "<td>" . $row['Frequency'] . "</td>";
					echo "<td>" . $row['Quality'] . "</td>";
					echo "<td>" . $row['Strength'] . "</td>";
					echo "<td>" . $row['Timestamp'] . "</td>";
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
