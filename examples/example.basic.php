<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Nichin79\Curl\BasicCurl;

$data = [
  'url' => 'https://reqbin.com/echo',
  // Method will automatically be set to GET if not specified
  'method' => 'GET',
  'headers' => [],
  'options' => [
    'userpwd' => 'username:password'
  ]
];

$curl = new BasicCurl($data);

echo json_encode($curl->response(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo "\r\n";
echo "http status code: " . $curl->httpcode;