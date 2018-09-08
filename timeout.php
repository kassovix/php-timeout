<?php

$timeout = 10;
if (isset($_GET['t'])) {
    $timeout = $_GET['t'];
}
print("This page was loaded in ".$timeout." seconds");
sleep($timeout);