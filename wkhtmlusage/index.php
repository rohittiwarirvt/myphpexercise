<?php

require_once __DIR__ . '/vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;


// Create a new Pdf object with some global PDF options
$pdf = new Pdf();

//var_dump($pdf);
//die;
// Add a page. To override above page defaults, you could add
// another $options array as second argument.
$pdf->addPage('redhat-html/executive-deck.html');


if (!$pdf->saveAs('page.pdf')) {
    echo $pdf->getError();
}
