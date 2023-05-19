<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://v3.football.api-sports.io/fixtures?league=39&season=2022&next=6",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: https://v3.football.api-sports.io/",
		"x-apisports-key: ec391f3683412ef418ded8353ae32052"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data = json_decode($response, true);
}

?>
