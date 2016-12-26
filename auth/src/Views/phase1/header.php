<?php

$styles = <<<EOT
<link rel='stylesheet' href='/src/Assets/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css'></link>
EOT;

$scripts = <<<EOT
<script type="text/javascript" src="/src/Assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/src/Assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
EOT;

$header = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rohit Auth Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
{$styles}
{$scripts}
<head>

EOT;

print $header;
