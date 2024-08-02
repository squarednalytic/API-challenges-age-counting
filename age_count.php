<?php 

$url = "https://coderbyte.com/api/challenges/json/age-counting";
$challengeToken = "9fh4guz8cb";
$options = [
    "http" => [
        "header" => "ChallengeToken: $challengeToken"
    ]
];
$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die('Error occurred');
}

$data = json_decode($response, true);

if ($data === NULL) {
    die('Error decoding JSON');
}

$items = explode(", ", $data['data']);

$count = 0;

foreach ($items as $item) {
    if (preg_match('/age=(\d+)/', $item, $matches)) {
        $age = intval($matches[1]);
        if ($age >= 50) {
            $count++;
        }
    }
}

$countStr = strval($count);

$filteredCountStr = str_ireplace(str_split($challengeToken), '', $countStr);

if (empty($filteredCountStr)) {
    echo "EMPTY";
} else {
    echo $filteredCountStr;
}
?>