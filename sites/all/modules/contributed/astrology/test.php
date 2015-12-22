<?php
$result = db_query("SELECT * FROM {field_data_astrology_natal_sun}");
if ($result) {
	while ($row = $result->fetchAssoc()) {
		$natal_sun =  $row['astrology_natal_sun_value'];
		$natal_sun_sign = substr($natal_sun, 2, 3);
		$natal_sun_degree = substr($natal_sun, 0, 2);
		$natal_sun_minute = substr($natal_sun, -2);

		echo "The natal Sun sign is " . 
		$natal_sun_sign . " " .
		$natal_sun_degree . " degrees " . 
		$natal_sun_minute . " minutes<br />";
	}
}

$result1 = db_query("SELECT * FROM {field_revision_astrology_name_last}");
if ($result1) {
	while ($row = $result1->fetchAssoc()) {
		$name_last =  $row['astrology_name_last_value'];

		echo "The last name is " . $name_last . "<br />";
	}
}

/*
<?php
   include("../pwd/sites/all/modules/astrology/test.php") ;
?>
*/

?>