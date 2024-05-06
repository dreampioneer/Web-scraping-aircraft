<?php

function getAirlines($page) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.airlines-inform.com/south_america/?ajx=Y&PAGEN_1=' . $page,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"xhr":[{"params":{"method":"POST","hostname":"bam.nr-data.net","port":"443","protocol":"https","host":"bam.nr-data.net:443","pathname":"/events/1/NRJS-8ee30fb60b5d38aac95","status":200},"metrics":{"count":1,"txSize":{"t":470},"rxSize":{"t":24},"duration":{"t":323},"cbTime":{"t":0},"time":{"t":14128}}},{"params":{"method":"POST","hostname":"bam.nr-data.net","port":"443","protocol":"https","host":"bam.nr-data.net:443","pathname":"/jserrors/1/NRJS-8ee30fb60b5d38aac95","status":200},"metrics":{"count":1,"txSize":{"t":594},"rxSize":{"t":24},"duration":{"t":326},"cbTime":{"t":0},"time":{"t":14129}}}]}&{"xhr":[{"params":{"method":"POST","hostname":"bam.nr-data.net","port":"443","protocol":"https","host":"bam.nr-data.net:443","pathname":"/jserrors/1/NRJS-8ee30fb60b5d38aac95","status":200},"metrics":{"count":1,"txSize":{"t":603},"rxSize":{"t":24},"duration":{"t":335},"cbTime":{"t":0},"time":{"t":24169}}}]}&{"xhr":[{"params":{"method":"POST","hostname":"bam.nr-data.net","port":"443","protocol":"https","host":"bam.nr-data.net:443","pathname":"/jserrors/1/NRJS-8ee30fb60b5d38aac95","status":200},"metrics":{"count":1,"txSize":{"t":307},"rxSize":{"t":24},"duration":{"t":332},"cbTime":{"t":0},"time":{"t":35173}}}]}',
    CURLOPT_HTTPHEADER => array(
        'accept: text/html, */*; q=0.01',
        'accept-language: en-US,en;q=0.9',
        'cookie: resolution=1427; PHPSESSID=143429d2f3e2a331febc336798e246c8; BITRIX_SM_BANNERS=2_69_25_09052024%2C2_74_28_09052024; BITRIX_SM_BANNERS=2_69_1_09052024%2C2_74_1_09052024; PHPSESSID=dkcint8088uvdp1n8knaoka003',
        'referer: https://www.airlines-inform.com/south_america/2.html',
        'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        'x-requested-with: XMLHttpRequest',
        'Accept: */*',
        'Accept-Language: en-US,en;q=0.9',
        'Connection: keep-alive',
        'Cookie: JSESSIONID=c8b97ed047e63bdc',
        'Origin: https://widgets.skyscanner.net',
        'Referer: https://widgets.skyscanner.net/',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: cross-site',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        'content-type: text/plain'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

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
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"ja":{"connectionType":"3g","widgetType":"SearchWidget","pageGroup":"travel-widgets","awsRegion":"eu-west-1","awsAccount":"cells-1","service.name":"travel-widgets","service.namespace":"widgets","service.version":"1.0.6405","commit.sha":"10714a4d5e1a00ea69e7dabb2b2481b15bc90870","initialRenderFromCloudFront":"true"}}&bel.7;1,a,,1rz,104,j,\'initialPageLoad,\'https://widgets.skyscanner.net/widget-server/widgets/render,1,1,,,!!!!\'9c21f964-6ef8-4e57-b8f5-9ed6c9657963,\'1,yg,yg;5,\'connectionType,\'3g;5,\'widgetType,\'SearchWidget;5,\'pageGroup,\'travel-widgets;5,\'awsRegion,\'eu-west-1;5,\'awsAccount,\'cells-1;5,\'service.name,9;5,\'service.namespace,\'widgets;5,\'service.version,\'1.0.6405;5,\'commit.sha,\'10714a4d5e1a00ea69e7dabb2b2481b15bc90870;5,\'initialRenderFromCloudFront,\'true;b,,,,,2,,,,,,d,gb,3,!3i,,,e7,1,4',
    CURLOPT_HTTPHEADER => array(
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9',
        'cache-control: max-age=0',
        'cookie: resolution=1427; PHPSESSID=m3icc1aad29a8vr54h9vmhebq4; BITRIX_SM_BANNERS=2_74_11_09052024%2C2_69_10_09052024; BITRIX_SM_BANNERS=2_69_1_09052024%2C2_74_1_09052024; PHPSESSID=gd54r0492buouon3a8uv74qot0',
        'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: none',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        "'Referer: '" . $url . "'",
        'Origin: https://www.airlines-inform.com',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36',
        'if-none-match: W/"8bc52-muG5E/bvb0Az0NuwgV5RxazPUHA"',
        'referer: https://www.airlines-inform.com/',
        'Accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.9',
        'Connection: keep-alive',
        'Cookie: VID=3SU5d12VzNOn1cA4BZ001JJ9',
        'Sec-Fetch-Dest: image',
        'Sec-Fetch-Mode: no-cors',
        'Sec-Fetch-Site: cross-site',
        'content-type: text/plain'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}


$domain  = "https://www.airlines-inform.com";
$fileName = "south_america.csv";
$targetUrl = "/south_america";
$pageCount = 4;
$fileHandle = fopen($fileName, 'w');
fputcsv($fileHandle, [
    "Company Name",
    "Contact Number",
    "Email",
    "URL",
]);
for( $i = 1; $i < $pageCount + 1; $i++ ){
    echo 'Page ' . $i . "\n\n";
    $htmlString = (string) getAirlines($i);
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($htmlString);
    $xpath = new DOMXPath($doc);
    $details = $xpath->query('//a[contains(@class, "airlines")]/@href');
    foreach ($details as $index => $detail) {
        echo $detail->nodeValue . "\n";
        $detailUrl = $detail->nodeValue;
        $htmlString1 = (string) getHTML($domain . $detailUrl);
        libxml_use_internal_errors(true);
        $doc1 = new DOMDocument();
        $doc1->loadHTML($htmlString1);
        $xpath1 = new DOMXPath($doc1);
        $companyNames = $xpath1->query('//*[@id="h1ad"]');
        $companyName = $companyNames[0]->nodeValue;
        $infos = $xpath1->query('//div[contains(@class, "posrel")]//p');
        $phoneNumber = '';
        $email = '';
        foreach ($infos as $subIndex => $subInfo) {
            if(strpos($subInfo->nodeValue, 'Phone number:') !== false){
                $phoneNumber = trim(str_replace('Phone number:', '', $subInfo->nodeValue));
            }
            if(strpos($subInfo->nodeValue, 'E-mail:') !== false){
                $email = trim(str_replace('E-mail:', '', $subInfo->nodeValue));
            }
        }
        fputcsv($fileHandle, [
            $companyName,
            $phoneNumber,
            $email,
            $domain . $detailUrl,
        ]);
        echo $index . "\n";
    }
}

echo "Completed";