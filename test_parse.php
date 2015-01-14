<?php


$post_data['sid'] = '661409866';
$post_data['PIN'] = 'Adsltr965';
$cookie_file_path = "./cookie.txt"; 


//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}
 
//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);
 
//create cURL connection
$curl_connection1 = 
  curl_init('https://sis.rpi.edu/rss/twbkwbis.P_ValLogin');
 
//set options
curl_setopt($curl_connection1, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection1, CURLOPT_USERAGENT, 
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"); 
curl_setopt($curl_connection1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection1, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($curl_connection1, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($curl_connection1, CURLOPT_COOKIEJAR, $cookie_file_path);


//set data to be posted

curl_setopt($curl_connection1, CURLOPT_POSTFIELDS, $post_string);
 
//perform our request
try {
$result = curl_exec($curl_connection1);
} catch (Exception $e) {
	echo "error";
}


 
//create cURL connection
$curl_connection = curl_init('https://sis.rpi.edu/rss/bwskfcls.P_GetCrse_Advanced');
//$curl_connection = curl_init('http://localhost/roomfinder/search_form_test_parse.php');

$post_string = "sel_subj=ADMN&rsts=dummy&crn=dummy&term_in=201501&sel_day=dummy&sel_schd=dummy&sel_insm=dummy&sel_camp=%&sel_levl=dummy&sel_sess=dummy&sel_instr=dummy&sel_ptrm=%&sel_attr=dummy&path=1&sel_crse=&sel_title=&sel_from_cred=&sel_to_cred=&begin_hh=0&begin_mi=0&begin_ap=a&end_hh=0&end_mi=0&end_ap=a&SUB_BTN=Section Search";

 
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
$result = curl_exec($curl_connection);
echo $result;
?>