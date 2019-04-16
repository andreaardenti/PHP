<?php
$a = 10;
function sum($b) {
    global $a;
    return $a + $b;
}
echo sum(10);

?>