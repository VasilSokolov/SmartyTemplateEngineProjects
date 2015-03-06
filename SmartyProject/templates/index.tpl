<?php
error_reporting(0);
require 'configs/config.php';

//=-----------SELECT--------\\

if ($result = $db->query("SELECT * FROM people")){
	if ($count = $result->num_rows) {
		echo '<p>',$count, '</p>';

		while ($row = $result->fetch_object()) {
			echo $row->first_name, ' ', $row->last_name, '<br>';
		}
		$result->free();
		
	}
}

?>