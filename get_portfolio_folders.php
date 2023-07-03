<?php
$dir = './portfolio/';
$folders = array_diff(scandir($dir), array('..', '.'));
echo 'callback(' . json_encode($folders) . ')';
?>