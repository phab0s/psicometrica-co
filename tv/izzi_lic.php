<?php

declare(strict_types=1);

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");


$targetUrl = 'https://multi-sec.izzigo.tv/?deviceId=YWE0NDkwZGYtMjEyZS0zNGJlLWI5MjItZjRhZmYzYjhhOGQ4&Authorization=eyJ0eXAiOiJKV1QiLCJraWQiOiJkYmMxZThjMy0xOTc3LTRiYjMtYWVmNy1lZjU0Yzg4MDI5OGMiLCJhbGciOiJFUzI1NiJ9.eyJzdWIiOiJzdGF0aWMiLCJpc3MiOiJJenppR28iLCJhdWQiOiJ1cm46dmVyaW1hdHJpeDp2ZGlzIiwianRpIjoiNjljNzM3M2MtZjhhNy01Yzk0LTk2MmQtYTMxNjc5MTBkYjNkIiwiaWF0IjoxNjU4MjAyMTA2LCJleHAiOjE3MjEzNjE3MTB9.60c2PyVYprdTE7bAsiqQgHSHSgLCovp9kX5oqOiqfaS_FmVrn_JvqhNyqjoZ9uboVXzsaUNhYfcZm64ULaSdfw';

$curlHttpHeaders = [
    "Host: multi-sec.izzigo.tv",
    "Origin: https://izzigo.tv",
    "Referer: https://izzigo.tv/",
    "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Safari/537.36",
];


$payload = file_get_contents('php://input');
if ($payload === false) {
    $payload = '';
}

function executeCurlRequest(string $url, string $payload, array $headers): string|false
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}


$finalResponse = 'MALFORMED_REQUEST';


while ($finalResponse === 'MALFORMED_REQUEST') {

    $attemptResponse = executeCurlRequest($targetUrl, $payload, $curlHttpHeaders);

    if ($attemptResponse === 'MALFORMED_REQUEST') {
        $finalResponse = executeCurlRequest($targetUrl, $payload, $curlHttpHeaders);
    } else {
        $finalResponse = $attemptResponse;
    }
}

echo $finalResponse;

?>