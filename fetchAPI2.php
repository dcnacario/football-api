<?php 
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://v3.football.api-sports.io/odds?league=39&season=2022&date=2023-05-20&bookmaker=6",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: https://v3.football.api-sports.io/",
		"X-RapidAPI-Key: ec391f3683412ef418ded8353ae32052"
	],
]);

$responseOdds = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data2 = json_decode($responseOdds,true);
}
?>