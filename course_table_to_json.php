<?php

ini_set("memory_limit","320M");
include_once('simple_html_dom.php');
//$doc = file_get_html('search_form.html');
$str = file_get_contents('course_table.html');
$doc = new simple_html_dom();
$doc -> load($str);


$val = "";

$dayhash = array(
	"M" => 1,
	"T" => 2,
	"W" => 3,
	"R" => 4,
	"F" => 5,
	);

$id = 0;
foreach($doc->find('tr') as $row) {
	$tmp = $row -> find("td[class='dddefault']", 2);
	if ($tmp == null) {
		continue;
	}

	$tmp = $row -> find("td[class='dddefault']", 8)->innertext;
	if ($tmp == "&nbsp;" || strpos($tmp, "TBA") !== false) {
		continue;
	}

	$tmp = $row -> find("td[class='dddefault']", 9)->innertext;
	if (strpos($tmp, "TBA") !== false) {
		continue;
	}

	$tmp = $row -> find("td[class='dddefault']", 21)->innertext;
	if (strpos($tmp, "TBA") !== false) {
		continue;
	}

	$subj[] = $row -> find("td[class='dddefault']", 2)->innertext;
	$crse[] = $row -> find("td[class='dddefault']", 3)->innertext;
	$sec[] = $row -> find("td[class='dddefault']", 4)->innertext;

	if ($subj[$id] == "&nbsp;") {
		$id2 = $id-1;
		$subj[$id] = $subj[$id2];
		$crse[$id] = $crse[$id2];
		$sec[$id] = $sec[$id2];
	}

	$str = $row -> find("td[class='dddefault']", 8)->innertext;
	$len = strlen($str);

	for ($i = 0; $i < $len; $i++) {
		$val = $dayhash[$str{$i}];
		$days[$id][] = $val;
	}


	$str = $row -> find("td[class='dddefault']", 9)->innertext; 
	$arr = explode("-", $str);
	$arrbegin = explode(" ", $arr[0]);
	$arrend = explode(" ", $arr[1]);
	$hhmmbegin = explode(":", $arrbegin[0]);
	$hhmmend = explode(":", $arrend[0]);
	$hhbegin = intval($hhmmbegin[0]);
	$hhend = intval($hhmmend[0]);
	$mmbegin = intval($hhmmbegin[1]);
	$mmend = intval($hhmmend[1]);

	$hhbegin = $arrbegin[1]=="pm" && $hhbegin != 12? $hhbegin+12: $hhbegin;
	$hhend = $arrend[1]=="pm" && $hhend != 12? $hhend+12: $hhend;

	$time[$id][0] = -1;
	$time[$id][1] = $hhbegin;
	$time[$id][2] = $mmbegin;
	$time[$id][3] = $hhend;
	$time[$id][4] = $mmend;

	$str = $row -> find("td[class='dddefault']", 21)->innertext;
	$arr = explode(" ", $str);
	$bdng[] = $arr[0];
	$room[] = $arr[1];

	$info[] = array(
		"subj" => $subj[$id],
		"crse" => $crse[$id],
		"sec" => $sec[$id],
		"days" => $days[$id],
		"time" => $time[$id],
		"bdng" => $bdng[$id],
		"room" => $room[$id],
		"id" => $id,
	);

	$id++;
}

for ($i = 0; $i < count($info); $i++) {
	for ($j = 0; $j < count($info); $j++) {
		if ($i == $j) {
			continue;
		}

		$a = $info[$i];
		$b = $info[$j];
		if ($a["subj"] == $b["subj"] && $a["crse"] == $b["crse"] && $a["sec"] == $b["sec"] && $a["id"]!=$b["id"]) {
			$id1 = $a["id"];
			$id2 = $b["id"];

			$info[$i]["id"] = $id1 < $id2? $id1 : $id2;
			$info[$j]["id"] = $id1 < $id2? $id1 : $id2;
		}
	}
}

$json_ret = json_encode($info);
$mf = fopen ("course_table.json", "w");
fwrite($mf, $json_ret);
fclose($mf);

header("Location: course_schedule_parse.php");

//printing building names
/*$rooms = array();
for ($i = 0; $i < count($info); $i++) {
	$str = $info[$i]["bdng"];
	if (in_array($str, $rooms)) {
		continue;
	}
	$rooms[] = $str;
	echo $str;
	echo "<p/>";
}*/

//------------------------------------- clearing memory ---------------------------------------------
unset($html);
?>