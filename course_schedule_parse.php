<?php
	ini_set("memory_limit","1000M");

	$content = file_get_contents('course_table.json');
    $arr = json_decode($content, TRUE);

    foreach($arr as $level => $item){
    	$subj = $item["subj"];
    	$crse = $item["crse"];
    	$sec = $item["sec"];
    	$bdng = $item["bdng"];
    	$room = $item["room"];

    	$hh1 = $item["time"][1];
    	$mm1 = $item["time"][2];
    	$hh2 = $item["time"][3];
    	$mm2 = $item["time"][4];

	    foreach($item["days"] as $day) {
	    	for ($tt = $hh1 * 60 + $mm1; $tt <= $hh2 * 60 + $mm2; $tt++) {
	    		$rooms[$bdng][$room][$day][$tt] = array(
    				"available" => -1,
    				"start" => $hh1 * 60 + $mm1,
    				"end" => $hh2 * 60 + $mm2,
    				"subj" => $subj,
    				"crse" => $crse,
    				"sec" => $sec
    			);
	    	}

	    }

		foreach($item["days"] as $day) {
	    	if ($hh1 == $hh2) {
	    		for ($mm = $mm1; $mm <= $mm2; $mm++){
	    			$courses[$subj][$crse][$sec][$hh1*60 + $mm] = array(
	    				"bdng" => $bdng,
	    				"room" => $room
	    			);
	    		}
	    	} else {
	    		for ($mm = $mm1; $mm <= 60; $mm++) {
	    			$courses[$subj][$crse][$sec][$hh1*60 + $mm] = array(
	    				"bdng" => $bdng,
	    				"room" => $room
	    			);
	    		}

	    		for ($mm = 0; $mm <= $mm2; $mm++) {
	    			$courses[$subj][$crse][$sec][$hh2*60 + $mm] = array(
	    				"bdng" => $bdng,
	    				"room" => $room
	    			);
	    		}
	    	}
	    }	    
	}


	foreach($rooms as $bdng => $item){
		foreach ($item as $room => $schedule) {
			for ($day = 1; $day <= 7; $day++) {
				if (!isset($rooms[$bdng][$room][$day])) {
					for ($hh = 0; $hh <= 24; $hh++) {
						for($mm = 0; $mm <= 60; $mm++) {
							$tt = $hh*60+$mm;
							$rooms[$bdng][$room][$day][$tt] = array(
								"available" => 24 * 60
							);

						}
					}
				} else {
					$last = 24 * 60 + 60;
					$next = (24 * 60 + 60) * 2;
					for ($tt = $last; $tt >= 0; ) {
						if (isset($rooms[$bdng][$room][$day][$tt])) {
							$next = $rooms[$bdng][$room][$day][$tt]["start"];
							$tt = $next -1;
							continue;
						}

						$rooms[$bdng][$room][$day][$tt] = array(
							"available" => $next - $tt,
							"next" => $next
						);
						

						$tt--;
					}



				}
			}
		}

	}

	if (!isset($rooms["SAGE"]["4101"][3][901])) {
		echo "error222";
		exit;
	}

	
	foreach($rooms as $bdng => $item) {
		foreach ($item as $room => $schedule) {
			for ($day = 1; $day <= 7; $day++) {
				for ($hh = 0; $hh <= 24; $hh++) {
					for ($mm = 0; $mm <= 60; $mm++) {
						if (!isset($rooms[$bdng][$room][$day][$hh * 60 + $mm])) {
							echo "$bdng:".$bdng." room:".$room." day:".$day." hh:".$hh." mm:".$mm;
							exit;
						}

						$tmp[$day][$hh][$bdng][$room][$day][$hh*60 + $mm] = $rooms[$bdng][$room][$day][$hh * 60 + $mm];
					}
					
				}
			}
		}
	}

	for ($day = 1; $day <= 7; $day++) {
		for ($hh = 0; $hh <= 24; $hh++) {
			$fname = "./rooms/rooms_".$day."_".$hh.".json";
			$mf = fopen ($fname, "w");
			$tmp_json = json_encode($tmp[$day][$hh]);
			fwrite($mf, $tmp_json);
			fclose($mf);
			unset($tmp_json);
		}
	}


	/*$rooms_schedule_json = json_encode($rooms);
	$mf = fopen ("rooms_schedule.json", "w");
	fwrite($mf, $rooms_schedule_json);
	fclose($mf);*/

	$course_schedule_json = json_encode($courses);
	$mf = fopen ("course_schedule.json", "w");
	fwrite($mf, $course_schedule_json);
	fclose($mf);

	//header("Location: courses_building_parse.php");

?>