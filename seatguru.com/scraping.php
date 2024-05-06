<?php 
function getHTML($url)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url, //'https://www.seatguru.com/browseairlines',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9',
        'cache-control: max-age=0',
        'cookie: PHPSESSID=3b1fedad484dbc5ad85b89b0689ddae1; __utma=191439016.1290931975.1713558699.1713558699.1713558699.1; __utmc=191439016; __utmz=191439016.1713558699.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; __gads=ID=6b69ccfff42c5117:T=1713558701:RT=1713558701:S=ALNI_MZ6mqL1n-9mWY-NDZ_qp6RulOOOuw; __gpi=UID=00000de1a3ec67d1:T=1713558701:RT=1713558701:S=ALNI_MZDeOkpc8fEqfky98nhE0krm5yfCg; __eoi=ID=6ed9f9c2b492ba00:T=1713558701:RT=1713558701:S=AA-AfjY4a0nFaUrAN-y0T60eCTFu; SeatGuru_EU=1; exitUnitURL=https://www.rentalcars.com/?affiliateCode=seatguru&adplat=ExitUnit; _gid=GA1.2.1774256287.1713558729; _gat_UA-10893687-23=1; _ga_V6RXJ6NKBF=GS1.1.1713558729.1.1.1713558865.52.0.0; _ga=GA1.1.1290931975.1713558699; __utmb=191439016.7.9.1713558720055; _uetsid=e6a65ff0fe8b11ee8fb0b57f02fc3dc1; _uetvid=e6a646e0fe8b11eea39a9362bf6d5689',
        'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: none',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function isPhoneNumber($phoneNumber) {
    $numericCount = preg_match_all("/[0-9]/", $phoneNumber);

    // Check if the count is greater than 4
    if ($numericCount > 4) {
        return true;
    } else {
        return false;
    }
}

$domain  = "https://www.seatguru.com/";
$fileName = "seatguru.com.csv";
$targetUrl = "/browseairlines";
$htmlString = (string) getHTML($domain . $targetUrl);
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);
$details = $xpath->query('//div[contains(@class, "browseAirlines")]//li//a/@href');
$fileHandle = fopen($fileName, 'w');
fputcsv($fileHandle, [
    "Company Name",
    "Contact Number",
    "url",
]);


foreach ($details as $index => $detail) {
    $detailUrl = $detail->nodeValue;
    $htmlString1 = (string) getHTML($domain . $detailUrl);
    libxml_use_internal_errors(true);
    $doc1 = new DOMDocument();
    $doc1->loadHTML($htmlString1);
    $xpath1 = new DOMXPath($doc1);
    $titles = $xpath1->query('//*[@class="title"]//h1');
    $companyName = $titles[0]->nodeValue;
    $contactNumberDiv = $xpath1->query('//*[contains(@class, "ai-info")]');
    $contactNumberArray = [];
    foreach($contactNumberDiv as $subIndex => $contactNumber) {
        if(isPhoneNumber($contactNumber->nodeValue) || substr($contactNumber->nodeValue, 0, 1) === "+"){
            array_push($contactNumberArray,  $contactNumber->nodeValue);
        }
    }
    $contactNumbers = implode(', ', $contactNumberArray);
    fputcsv($fileHandle, [
        $companyName,
        '"' . $contactNumbers . '"',
        $domain . $detailUrl,
   ]);
   echo $index . "\r\n";
}

echo 'completed';