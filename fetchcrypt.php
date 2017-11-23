<?php

  function getEncryptionData() {
    $url = 'https://asij.edsby.com/core/node.json/3523?xds=fetchcryptdata&type=HMAC-SHA-512';
    $options = array(
      CURLOPT_URL => $url,
      CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
      CURLOPT_HTTPGET => true,
      CURLOPT_RETURNTRANSFER => True
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);

    $result = curl_exec($ch);
    

    $j = json_decode($result,true);

    $s = $j['slices'][0]['data']['sauthdata'];

    $f = $j['slices'][0]['_formkey'];

    return array(
      'sauth' => $s,
      'form' => $f
    );
  }

?>
