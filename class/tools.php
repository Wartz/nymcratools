<?php
class Tools {
	function menu() {
		$navitems = array('index'=>"Home", 'news'=>"Post News",'members'=>"Members", 'races'=>"Race Results", 'points'=>"Points Series");
		foreach ($navitems as $menu => $value) {
			echo "<li><a href=".$menu.".php>".$value."</a></li>";
		}
	}


	public function getusers() {
		//create pdo object
		$con = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
		$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//query
		//// add boatcloss to query when implemented
		$sql = "SELECT firstname, lastname, boatnumber/*, boatclass,*/ FROM users ORDER BY boatnumber";
		$stmt = $con->prepare($sql);
		$stmt->execute();

		//display data
		while ($row = $stmt->fetch()){
		//// add boatcloss to echo when implemented
			echo "<tr><td>". $row['boatnumber'] . "</td><td>" /* . $row['boatclass'] . "</td><td>"*/ . $row['firstname'] . " " . $row['lastname'] . "</td></tr>";
		}
	}

	function updateraces() {
		$row = 1;
		if (($handle = fopen("WellsBridgeResults.csv", "r")) !== FALSE) {
			echo "<table border=\"1\">";
			    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					echo "<tr>";
			        $num = count($data);
			        $row++;
			        for ($c=0; $c < $num; $c++) {
			            echo "<td>" . $data[$c] . "</td>";
			        }
					echo "</tr>";
			    }
			    fclose($handle);
			echo "</table>";
		}
	}

	function updatepoints() {
		return 0;
	}

	function content() {
		echo "CONTENT!!!11<br>";
		echo "Will be MVCing this soon I hope";
        echo "maybe today?";
	}
}
