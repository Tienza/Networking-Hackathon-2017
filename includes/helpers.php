<?php
	$debug = true;

	function show_networks($dbc) {
		$query = 'SELECT * FROM Network ORDER BY Timestamp DESC LIMIT 50';

		$result = mysqli_query($dbc, $query);

		# Output SQL errors, if any
		show_query($query);
    	check_results($results);

    	if ($results && mysqli_num_rows($results) > 0) {
    		while ( $row = mysqli_fetch_array($results , MYSQLI_ASSOC )){
				echo "<tr>";
					echo "<td>" . $row['SSID'] . "</td>";
					echo "<td>" . $row['MacAddr'] . "</td>";
					echo "<td>" . $row['Frequency'] . "</td>";
					echo "<td>" . $row['Quality'] . "</td>";
					echo "<td>" . $row['Strength'] . "</td>";
					echo "<td>" . $row['Timestamp'] . "</td>";
				echo "</tr>";
			}
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