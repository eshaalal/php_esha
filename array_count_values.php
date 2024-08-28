<?php
$colors = array("red", "green", "blue", "red", "yellow", "blue");
$colorCounts = array_count_values($colors);

foreach ($colorCounts as $color => $count) {
    echo "$color: $count<br>";
}

?>
