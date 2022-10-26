<?php 

$token = "token";
$daydata = json_decode(file_get_contents("day.json"));
$day = $daydata->day->day;


$request_params = array(
	'text' => "test| {$day} Days",
	'access_token' => $token,
	'v' => '5.103',
	);
	$get_params = http_build_query($request_params);
	file_get_contents('https://api.vk.com/method/status.set?'. $get_params);
	

$day = $day + 1;
$taskList['day'] = array('day' => $day);  
$post = array (
	'day' => $day   
);
file_put_contents("day.json", json_encode($taskList))
?>
