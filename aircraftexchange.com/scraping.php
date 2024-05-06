<?php

function getHTML($url)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Referer: https://aircraftexchange.com/',
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9',
        'cache-control: max-age=0',
        'cookie: _gcl_au=1.1.1202618539.1713461224; _gid=GA1.2.1192006988.1713461227; _lo_uid=307696-1713461488530-5bb6df79e19396ea; _lorid=307696-1713461488530-337f8f126695e168; _lo_v=1; __lotl=https%3A%2F%2Faircraftexchange.com%2Fjet-aircraft-for-sale%2Fdetails%2F6113%2F1996-beechcraft-king-air-350-for-sale; _ga=GA1.1.983305141.1713461227; _ga_J4JJ5WHX1D=GS1.1.1713461226.1.1.1713461702.60.0.0; XSRF-TOKEN=eyJpdiI6Ijd6QWUzUVNJaUVmZ2doQWptb3NFZlE9PSIsInZhbHVlIjoiTVdtakhJcFpONmJXbzRLQ1k5eGlWalBIU3FnSlRRcGZQZ0k1czBINUlFN3dXSWw2cFVcL3l1blJEMVJIM2w2dGgiLCJtYWMiOiJmM2VkYzIzNmViNDQ5Y2YwMDFjZWZiMzA5YTAzZTgzMGI5ZmU1NGZlMGFkOTI4ZDVhNWEyZjA2OTQzZGI4NTk0In0%3D; laravel_session=eyJpdiI6IjFXcXMwS0NnNGhyUmh3dllrRmVPQ1E9PSIsInZhbHVlIjoiSFJzaEdEdUZVS3F3QVdRVWNCOGlENEpPV204cm56YkNpXC9OTVNUMkVUREZIRFo2OEdHSUs2cHNGVFZxbk5pQnMiLCJtYWMiOiIwOTk1ZTY5ZTFiYWMzMGRmZGU5MTJjZDIxODA5YTE3NzUyM2Q3ZThhM2Q0YWNkNzU3MmI5ZGY2YTNhNWQxMWFkIn0%3D; XSRF-TOKEN=eyJpdiI6InNuVitVWVo5Z0F4S3U5S0VWbURZT2c9PSIsInZhbHVlIjoiM2NjeXduMWNPWnBVWUNlUG14elwvUVFKZXVPaStWRmJQWkVMZmhXc1d3N3RhNk5ON3lRcjZXOTI5UXhxSk9GTVoiLCJtYWMiOiJlODRhMWI5N2E5MzMxMGU2M2JmNTA3YTQ0OGU4Y2I1OGFlY2IwMTIzM2YxZjg3OWM0NWY4NjA0YWQxZjU2NTBmIn0%3D; laravel_session=eyJpdiI6IkJZempSaWlNVFZ1VkRxcGgzOU04anc9PSIsInZhbHVlIjoianV1RUkxZ1JjZ2o2NGM2Z1NIbWRNZTd0MkJSQnVqWWxmZVM5Y1BCR1djdnk2NDBveFlCZGk3a213Z2RPY3RZMiIsIm1hYyI6IjdiMTY1YmJjYTcxMWY0OGY4OTIxOTJhYWE4MmUyYzM5MDZmM2E0ZGI2Nzg0YTE1MTM1MDcyOTA1NjA2ODBjZGYifQ%3D%3D',
        'referer: https://aircraftexchange.com/',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: same-origin',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        'origin: https://aircraftexchange.com',
        'Origin: https://aircraftexchange.com',
        'if-modified-since: Thu, 25 Jan 2024 18:19:40 GMT',
        'if-none-match: W/"e31293f40e8a324de552ff593ee76a9b"',
        'content-length: 0',
        'content-type: text/plain',
        'Content-Type: text/plain',
        'Pragma: no-cache',
        'Accept-Language: en-US,en;q=0.9',
        'Sec-WebSocket-Key: 7NnogOL09vU9UN3ZbzLNJw==',
        'Upgrade: websocket',
        'Cache-Control: no-cache',
        'Connection: Upgrade',
        'Sec-WebSocket-Version: 13',
        'Sec-WebSocket-Extensions: permessage-deflate; client_max_window_bits',
        'x-client-data: CKu1yQEIhLbJAQiltskBCKmdygEItJHLAQiUocsBCJuiywEImv7MAQj5mM0BCIWgzQEY2IbOARjrjaUX'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;

}

$domain  = "https://aircraftexchange.com";
$fileName = "aircraftexchange.com.csv";
$targetUrl = "/aircraft-for-sale/all";
$htmlString = (string) getHTML($domain . $targetUrl);
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);
$details = $xpath->query('//main//div[contains(@class, "w-full")]//a/@href');
$fileHandle = fopen($fileName, 'w');
fputcsv($fileHandle, [
    "Aircraft Name",
    "Company Name",
    "Contact Number",
    "url",
]);

foreach ($details as $index => $detail) {
    $detailUrl = $detail->nodeValue;
    $htmlString1 = (string) getHTML($detailUrl);
    file_put_contents('test.txt', $htmlString1);
    libxml_use_internal_errors(true);
    $doc1 = new DOMDocument();
    $doc1->loadHTML($htmlString1);
    $xpath1 = new DOMXPath($doc1);
    $specs = $xpath1->query('//*[@class="details"]//*[@class="information"]//*[@class="specs"]//h1');
    $aircraftName = $specs[0]->nodeValue;
    $companyNameDiv = $xpath1->query('//*[contains(@class, "broker")]/p[2]');
    $companyName = trim($companyNameDiv[0]->nodeValue);
    $contactNumberDiv = $xpath1->query('//*[contains(@class, "broker")]//p[contains(@class, "mt-4")]//a/@href');
    $contactNumberArray = [];
    foreach($contactNumberDiv as $subIndex => $contactNumber) {
        if(str_contains($contactNumber->nodeValue, 'tel:')){
            array_push($contactNumberArray, str_replace('tel:', '', $contactNumber->nodeValue));
        }
    }
    $contactNumbers = implode(', ', $contactNumberArray);
    fputcsv($fileHandle, [
        $aircraftName,
        $companyName,
        '"' . $contactNumbers . '"',
        $detailUrl,
   ]);
   echo $index . "\r\n";
}

echo 'completed';