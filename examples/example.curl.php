<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Nichin79\Curl\Curl;


// Method 1
$data = [
  'url' => 'https://reqbin.com/echo',
  // Method will automatically be set to GET if not specified
  'method' => 'GET',
  'headers' => [],
  'options' => [
    'SSL_VERIFYPEER' => false
  ]
];

// Method 2
// $data = [
//   'curlopt_url' => 'https://reqbin.com/echo',
//   'curlopt_ssl_verifypeer' => false,
// ];

$curl = new Curl($data);

// execute the initiated curl and return the response
$curl->exec();

echo "\r\n";
echo "http status code: " . $curl->httpcode();