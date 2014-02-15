<?php

class Tools {
	public function getusers() {
		//create pdo object
		$con = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
		$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//query
		$sql = "SELECT firstname, lastname, boatnumber FROM users";
		$stmt = $con->prepare($sql);
		$stmt->execute();

		while ($row = $stmt->fetch()){
			echo "<tr><td>". $row['boatnumber'] . "</td><td>" . $row['firstname'] . " " . $row['lastname'] . "</td></tr>";
		}
	}

	function updateraces() {
		return 0;
	}

	function updatepoints() {
		return 0;
	}
}