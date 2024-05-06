<?php
header('Content-Type: application/json');

$disks = json_decode(file_get_contents('disks.json'), true);

echo json_encode($disks);
