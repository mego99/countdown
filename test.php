<?php

include 'fetchcrypt.php';

$url = 'https://asij.edsby.com/core/login/3523?xds=loginform&editable=true&_import=crypt';

$sauth = getEncryptionData()['sauth'];
$form = getEncryptionData()['form'];

$fields = array(
  'login-host' => 'asij',
  'login-userid' => '18okawam',
  'remember' => 1,
  'sauthdata' => $sauth,
  '_formkey' => $form,
  ////////PASSWORD!
  'login-password' => '',
  'crypttype' => 'Plaintext'
);

$options = array(
  CURLOPT_URL => $url,
  CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
  CURLOPT_POST => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $fields
);


$ch = curl_init();
curl_setopt_array($ch, $options);
$fresult = curl_exec($ch);

// echo var_dump($fresult);

file_put_contents('test.html',$fresult)


 ?>
