var folders = <?php
$dir = './portfolio/';
$folders = array_diff(scandir($dir), array('..', '.'));
echo json_encode($folders);
?>;