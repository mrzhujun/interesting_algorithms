<?php
//买一注双色球

require_once 'common_func.php';


list($red_balls_true,$blue_balls_true) = choujiang();
foreach ($red_balls_true as $item) {
    echo $item.' ';
}
echo "| ";
foreach ($blue_balls_true as $item) {
    echo $item;
}