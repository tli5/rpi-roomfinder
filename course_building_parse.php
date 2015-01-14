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
	    
	}
?>