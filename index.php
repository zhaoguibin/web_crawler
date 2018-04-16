<?php
require './guzzle/vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$header = [
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36',
    'Referer'=>'http://info.21cp.com/industry/News/'
];

$res = $client->request('GET', 'http://info.21cp.com/industry/News/',
                    [
                        'headers' => $header,
                    ]
);

echo $web_content = $rs = mb_convert_encoding($res->getBody(), 'utf-8', 'GBK,UTF-8,ASCII');



