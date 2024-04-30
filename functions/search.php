<?php

require_once "loadAPI.php";

if (!isset($_POST['query'])) {
    exit;
}

$query = $_POST['query'];
$parameters = http_build_query([
    'query' => $query,
    'number' => 6,
]);

$url = "https://api.spoonacular.com/recipes/complexSearch?$parameters&apiKey=$API_KEY";

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
    exit;
}

$data = json_decode($response, true);

if (!isset($data['results'])) {
    echo 'No results found.';
    exit;
}

curl_close($curl);

return $data;
