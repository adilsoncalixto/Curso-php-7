<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 340, 150, $titleColor, __DIR__."/fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");

imagettftext($image, 32, 0, 340, 350, $titleColor, __DIR__."/fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");

imagestring($image, 3, 600, 570, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>