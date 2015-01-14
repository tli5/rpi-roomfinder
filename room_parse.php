<?php

echo "fill id and pass info";
exit;

//create array of data to be posted
$post_data['sid'] = '***';
$post_data['PIN'] = '***';
$cookie_file_path = "./cookie.txt"; 


//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}
 
//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);
 
//create cURL connection
$curl_connection = 
  curl_init('https://sis.rpi.edu/rss/twbkwbis.P_ValLogin');
 
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, 
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"); 
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($curl_connection, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($curl_connection, CURLOPT_COOKIEJAR, $cookie_file_path);


//set data to be posted

curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
 
//perform our request
try {
$result = curl_exec($curl_connection);
} catch (Exception $e) {
	echo "error";
}



//show information regarding the request
/*print_r(curl_getinfo($curl_connection));
echo curl_errno($curl_connection) . '-' . 
                curl_error($curl_connection);*/
 
//close the connection

$head = "https://sis.rpi.edu";

$count = 1;

$result = str_replace("url=", "url=".$head, $result, $count);

curl_close($curl_connection);

$mf = fopen ("newfile.txt", "w");
fwrite($mf, $result);
fclose($mf);

//search courses by term parse
$search_term = "https://sis.rpi.edu/rss/bwckgens.p_proc_term_date";

$ch = curl_init($search_term);
unset($post_data);
unset($post_items);

$post_data['p_calling_proc'] = 'P_CrseSearch';
$post_data['p_term'] = '201501';
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}

$post_string = implode ('&', $post_items);


curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);

$result = curl_exec($ch);
$search_form = "search_form.html";
$mf = fopen ($search_form, "w");
fwrite($mf, $result);
fclose($mf);

//search per subject!!!
$select_subject = "https://sis.rpi.edu/rss/bwskfcls.P_GetCrse_Advanced";
//$select_subject = "http://localhost/roomfinder/search_form_test_parse.php";

//require('phpQuery.php');

//$doc = phpQuery::newDocumentHTML($result);

unset($post_data);
unset($post_items);

error_reporting(E_ERROR | E_PARSE);
$doc = new DomDocument;
$doc->validateOnParse = true;
$doc -> loadHTML($result);

$nodes = $doc->getElementById('subj_id')->getElementsByTagName("option");
$list = array();

$count = 0;

include('simple_html_dom.php');
$html = file_get_html($search_form);

foreach($html->find("input[type='hidden']") as $item) {
	$val = $item->getAttribute("value");
	$name = $item->getAttribute("name");

	$post_items[] = $name."=".$val;
}

$post_items[] = "sel_camp"."="."%25";
$post_items[] = "sel_ptrm"."="."%25";
$post_items[] = "sel_crse"."="."";
$post_items[] = "sel_title"."="."";
$post_items[] = "sel_from_cred"."="."";
$post_items[] = "sel_to_cred"."="."";
$post_items[] = "begin_hh"."="."0";
$post_items[] = "begin_mi"."="."0";
$post_items[] = "begin_ap"."="."a";
$post_items[] = "end_hh"."="."0";
$post_items[] = "end_mi"."="."0";
$post_items[] = "end_ap"."="."a";
$post_items[] = "SUB_BTN"."="."Section+Search";
foreach($nodes as $item) {
	$val = $item->getAttribute("value");
	$list[] = $val;
	$post_items[] = "sel_subj"."=".$val;
}

/*$post_items[] = "sel_subj"."="."ADMN";
$post_items[] = "sel_subj"."="."ARTS";*/

$post_string = implode ('&', $post_items);
//echo $post_string;


$ch2 = curl_init($select_subject);
curl_setopt($ch2, CURLOPT_REFERER, 'https://sis.rpi.edu/rss/bwckgens.p_proc_term_date');
curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 100);
curl_setopt($ch2, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36"); 
//curl_setopt($ch2, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"); 
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($ch2, CURLOPT_COOKIEJAR, $cookie_file_path);

$post_string2 = "rsts=dummy&crn=dummy&term_in=201501&sel_subj=dummy&sel_day=dummy&sel_schd=dummy&sel_insm=dummy&sel_camp=dummy&sel_levl=dummy&sel_sess=dummy&sel_instr=dummy&sel_ptrm=dummy&sel_attr=dummy&sel_subj=ADMN&sel_crse=&sel_title=&sel_from_cred=&sel_to_cred=&sel_camp=%25&sel_ptrm=%25&begin_hh=0&begin_mi=0&begin_ap=a&end_hh=0&end_mi=0&end_ap=a&SUB_BTN=Section+Search&path=1";
curl_setopt($ch2, CURLOPT_POSTFIELDS, $post_string);

$result2 = curl_exec($ch2);

/*$arr1 = explode("&", $post_string);
$arr2 = explode("&", $post_string2);

foreach($arr1 as $pair){
	$tmp = explode("=", $pair);
	$pairs1[$tmp[0]] = $tmp[1];
}

foreach($arr2 as $pair){
	$tmp = explode("=", $pair);
	$pairs2[$tmp[0]] = $tmp[1];
}

$str = "";
foreach($pairs1 as $key1 => $val1) {
	if ($pairs2[$key1] != $pairs1[$key1]) {
		echo "key:".$key1." val1:".$val1." val2:".$pairs2[$key1];
		echo "\xA";
	}
}

echo $str;*/

//echo $result2;

$mf = fopen ("course_table.html", "w");
fwrite($mf, $result2);
fclose($mf);


$id = 0;

header( "Location: course_table_to_json.php" ) ; 

?>