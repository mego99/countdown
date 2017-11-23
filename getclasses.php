<?php

include 'fetchcrypt.php';

$url = 'https://asij.edsby.com/core/node.json/5825?xds=AllClassesList&listtype=_rt_0';

$sauth = getEncryptionData()['sauth'];
$form = getEncryptionData()['form'];


$options = array(
  CURLOPT_URL => $url,
  CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
  CURLOPT_HTTPGET => true,
  CURLOPT_RETURNTRANSFER => True
);


$ch = curl_init();
curl_setopt_array($ch, $options);
$fresult = curl_exec($ch);

// echo var_dump($fresult);

file_put_contents('test.html',$fresult)


 ?>
