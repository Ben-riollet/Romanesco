<?php

$img = $_POST['imgBase64'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

$fileName = time().'.png';
$path = 'content/brush/'.$fileName;

file_put_contents($path, $fileData);

echo $fileName;

?>
