# curl

Contains two classes:

- Curl
- BasicCurl

BasicCurl extends Curl and will automatically use the curlopt's

- ssl_verifypeer
- returntransfer.
  In addition it will also execute the curl automatically.

If curlopt_returntransfer is set, the response can be retrieved with `$curl->getResponse()`.

`use Nichin79\Curl\BasicCurl;`
OR
`use Nichin79\Curl\Curl;`

Setting the params/options for curl can be done in two ways:

### Option 1

```
$data = [
  'url' => 'https://reqbin.com/echo',
  'method' => 'GET', // Method will automatically be set to GET if not specified
  'headers' => [],
  'options' => [
  'SSL_VERIFYPEER' => false
  ]
];
```

### Option 2

```
$data = [
  'curlopt_url' => 'https://reqbin.com/echo',
  'curlopt_ssl_verifypeer' => false,
];
```

### Usage

```
$curl = new Curl($data);

// execute the initiated curl and return the response
$curl->exec();

echo "\r\n";
echo "http status code: " . $curl->httpcode;
```

Setting url, method, headers and data are optional and can be set inside the options array as well.
