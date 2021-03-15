<?php

function get_all_balls() {
    $red_balls = [];
    $blue_balls = [];
    for ($i=1;$i<=32;$i++) {
        $red_balls[] = $i;
    }
    for ($i=1;$i<=16;$i++) {
        $blue_balls[] = $i;
    }
    return [$red_balls,$blue_balls];
}

function choujiang() {
    list($red_balls,$blue_balls) = get_all_balls();
    $red_balls_true = [];
    $blue_balls_true = [];
    while (count($red_balls_true) < 6) {
        $red_ball = $red_balls[rand(0,count($red_balls) - 1)];
        if (!in_array($red_ball,$red_balls_true)) {
            $red_balls_true[] = $red_ball;
        }
    }
    while (count($blue_balls_true) < 1) {
        $blue_ball = $blue_balls[rand(0,count($blue_balls) - 1)];
        if (!in_array($blue_ball,$blue_balls_true)) {
            $blue_balls_true[] = $blue_ball;
        }
    }
    sort($red_balls_true);
    sort($blue_balls_true);
    return [$red_balls_true,$blue_balls_true];
}

list($red_balls_true,$blue_balls_true) = choujiang();
foreach ($red_balls_true as $item) {
    echo $item.' ';
}
echo "| ";
foreach ($blue_balls_true as $item) {
    echo $item;
}