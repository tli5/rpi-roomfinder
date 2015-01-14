<?php
ini_set("memory_limit","1000M");

class EmptyRoom {
	protected $rooms;
	protected $day;
	protected $hh;
	protected $mm;
    public function __construct($day, $hh, $mm) {

        $day = strtolower($day);
		$day_arr = array(
			"mon" => 1,
			"tue" => 2,
			"wed" => 3,
			"thu" => 4,
			"fri" => 5,
			"sat" => 6,
			"sun" => 7
		);

		$day = $day_arr[$day];
		$fname = "./rooms/rooms_".$day."_".$hh.".json";
		$schedule_str = file_get_contents($fname);
		$this->rooms = json_decode($schedule_str, TRUE);

		$this->day = $day;
		$this->hh = $hh;
		$this->mm = $mm;
    }
    
    public function get_Available_Building_Names(){
    	$rooms = $this->rooms;
    	$day = $this->day;
    	$hh = $this->hh;
    	$mm = $this->mm;

    	$lvl_1 = 30;
    	$lvl_2 = 90;
    	$lvl_3 = 240;
    	$num = 3;

    	foreach ($rooms as $bdng => $item) {
    		$max = 0;
    		$max_room = "";
    		$max_color = "";
    		$max_icon = "";
    		$available = false;

    		$colors["green"] = 0;
    		$colors["blue"] = 0;
    		$colors["yellow"] = 0;

    		foreach ($item as $room => $schedule) {
    			$rem = $rooms[$bdng][$room][$day][$hh * 60 + $mm]["available"];

    			if ($rem < $lvl_1) {
    				continue;
    			}

    			$available = true;
    			if ($rem >= $lvl_1 && $rem < $lvl_2) {
    				$colors["yellow"]++;
    				$color = "yellow";
    			} elseif ($rem >=$lvl_2 && $rem< $lvl_3 ) {
    				$colors["green"]++;
    				$color = "green";
    			} elseif ($rem >= $lvl_3) {
    				$colors["blue"]++;
    				$color = "blue";
    			}

    			$max_room = $rem > $max ? $room: $max_room;
    			$max = $rem > $max ? $rem : $max;

                $tt = $rem + $this->hh * 60 + $this->mm;
                if ($tt >= 24 * 60) {
                    $till = "24:00";
                } else {
                    $fhh = floor($tt/ 60);
                    $fmm = $tt % 60;
                    $fhh = $fhh >= 10? $fhh : "0".$fhh;
                    $fmm = $fmm >= 10? $fmm : "0".$fmm;

                    $till = $fhh.":".$fmm;
                }

    			$ret[$bdng][$color][$room] = array(
                    "till" => $till, 
    				//"rem_hh" => floor($rem/ 60),
    				//"rem_mm" => $rem% 60
    			);
    		}

    		if ($available == false) {
    			continue;
    		}

    		if ($colors["blue"] != 0) {
    			$color = "blue";
    		} elseif ($colors["green"] != 0) {
    			$color = "green";
    		} else {
    			$color = "yellow";
    		}

    		$max_color = $color;

            if ($color == "blue" && $colors["blue"] >= $num) {
                $max_icon =  "./images/"."gold"."_"."1.png";
            } else {
                $max_icon = "./images/".$color."_"."2.png";
            }

    		$ret[$bdng]["max"] = array(
    			"room" => $max_room,
    			"rem" => $max,
    			"color" => $max_color,
    			"icon" => $max_icon,
                "green" => $colors["green"],
                "yellow" => $colors["yellow"],
                "blue" => $colors["blue"]
    		);

            $ret[$bdng]["yellow"]["title"] = $colors["yellow"]." Room(s) available for ".($lvl_1/60)." ~ ".($lvl_2/60)." hours.";
            $ret[$bdng]["green"]["title"] = $colors["green"]." Room(s) available for ".($lvl_2/60)." ~ ".($lvl_3/60)." hours.";
            $ret[$bdng]["blue"]["title"] = $colors["blue"]." Room(s) available for longer than ".($lvl_3/60)." hours.";
    	}

    	return $ret;
    }
}

?>