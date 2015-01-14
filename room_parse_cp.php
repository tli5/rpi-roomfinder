<?php

//create array of data to be posted
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
$curl_connection = 
  curl_init('https://sis.rpi.edu/rss/twbkwbis.P_ValLogin');
 
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, 
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"); 
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, false);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($curl_connection, CURLOPT_COOKIEFILE, $cookie_file_path);
curl_setopt($curl_connection, CURLOPT_COOKIEJAR, $cookie_file_path);


//set data to be posted
$post_string = "sid=661409866&PIN=Adsltr965";
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
 
//perform our request
$result = curl_exec($curl_connection);
 

//show information regarding the request
print_r(curl_getinfo($curl_connection));
echo curl_errno($curl_connection) . '-' . 
                curl_error($curl_connection);
 
//close the connection
curl_close($curl_connection);
echo $result;


?>