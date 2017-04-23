<?php
        require("connect_db.php");
	$debug = false;
        show_dstat($dbc);

	function show_dstat($dbc) {
		$query = 'SELECT * FROM Dstat ORDER BY RecordID DESC LIMIT 50;';

		$results = mysqli_query($dbc, $query);

		# Output SQL errors, if any
		show_query($query);
    	check_results($results);

    	if ($results && mysqli_num_rows($results) > 0) {
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Net_Recv</th>";
                        echo "<th>Net_Send</th>";
			echo "<th>UDP_Lis</th>";
                        echo "<th>UDP_Act</th>";
                        echo "<th>TCP_Lis</th>";
                        echo "<th>TCP_Act</th>";
                        echo "<th>TCP_Syn</th>";
                        echo "<th>TCP_Tim</th>"; 
                        echo "<th>TCP_Clo</th>";   
                    echo "</tr>";
    		while ( $row = mysqli_fetch_array($results , MYSQLI_ASSOC )){
				echo "<tr>";
					echo "<td>" . $row['net_recv'] . "</td>";
					echo "<td>" . $row['net_send'] . "</td>";	
					echo "<td>" . $row['udp_lis'] . "</td>";
					echo "<td>" . $row['udp_act'] . "</td>";
					echo "<td>" . $row['tcp_lis'] . "</td>";
					echo "<td>" . $row['tcp_act'] . "</td>";
					echo "<td>" . $row['tcp_syn'] . "</td>";
                                        echo "<td>" . $row['tcp_tim'] . "</td>";
                                        echo "<td>" . $row['tcp_clo'] . "</td>";      
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
