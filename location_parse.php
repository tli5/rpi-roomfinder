<?php

	$locations = array(
		"SAGE" => array(
			"lat" => 42.730869,
			"lng" => -73.681646
		),

		"DARRIN" => array(
			"lat" => 42.729567, 
			"lng" => -73.679337, 
		),

		"LOW" => array(
			"lat" => 42.728976, 
			"lng" => -73.678854
		),

		"EATON" => array(
			"lat" => 42.730182, 
			"lng" => -73.682609
		),

		"GREENE" => array(
			"lat" => 42.729954, 
			"lng" => -73.681225
		),

		"RCKTTS" => array(
			"lat" => 42.730903, 
			"lng" => -73.679755
		),

		"CARNEG" => array(
			"lat" => 42.730391, 
			"lng" => -73.683199
		),

		"WALKER" => array(
			"lat" => 42.730824, 
			"lng" => -73.682630
		),

		"TROY" => array(
			"lat" => 42.731017, 
			"lng" => -73.680506
		),

		"WEST" => array(
			"lat" => 42.731703, 
			"lng" => -73.683180
		),

		"J-ROWL" => array(
			"lat" => 42.728736, 
			"lng" => -73.680391
		),


		"JONSSN" => array(
			"lat" => 42.729650, 
			"lng" => -73.680391
		),

		"COGSWL" => array(
			"lat" => 42.728145, 
			"lng" => -73.681067
		),

		"LALLY" => array(
			"lat" => 42.730076, 
			"lng" => -73.681898
		),

		"MATLS" => array(
			"lat" => 42.728456, 
			"lng" => -73.682714
		),

		"GURLEY" => array(
			"lat" => 42.732801, 
			"lng" => -73.686819
		),

		"PITTS" => array(
			"lat" => 42.731172, 
			"lng" => -73.683327
		),

		"NUCENG" => array(
			"lat" => 42.732213, 
			"lng" => -73.662991
		),


		"ARMORY" => array(
			"lat" => 42.728443, 
			"lng" => -73.676963
		),

		"DNASN" => array(
			"lat" => 42.727650, 
			"lng" => -73.673628
		),

	);

	$json_ret = json_encode($locations);
	$mf = fopen ("location_table.json", "w");
	fwrite($mf, $json_ret);
	fclose($mf);


	echo $locations["ARMORY"]["lat"];
	echo "<p/>";
	echo $locations["ARMORY"]["lng"];

?>