<?php
//测试买多少钱 回本多少钱 1等奖800w 2等奖20w 3等奖3k 4=200 5=10 6=5
require_once 'common_func.php';
//1.中奖号
list($red_true,$blue_true) = choujiang();

$pay = 0;//总花费
$get = 0;//总奖金
$count = 0;//买了多少注
$award1 = 0;//1等奖次数
$award2 = 0;//2等奖次数
$award3 = 0;//3等奖次数
$award4 = 0;//4等奖次数
$award5 = 0;//5等奖次数
$award6 = 0;//6等奖次数
while (true) {
    $pay += 2;
    $count += 1;
    list($red_balls,$blue_balls) = choujiang();
    //1.等奖
    if ($red_balls == $red_true && $blue_balls == $blue_true) {
        $award1 += 1;
        $get += 8000000;
        echo '一等奖✖'.$award1,' 2等奖✖'.$award2.' 3等奖✖'.$award3.' 4等奖✖'.$award4.' 5等奖✖'.$award5.' 6等奖✖'.$award6.' 花费'.$pay.' 中奖'.$get."\n";
        echo '中奖号码：'.implode(',',$red_balls).'|'.$blue_true[0]."\n";
        break;
    }else if ($red_balls == $red_true) { //2等奖
        $award2 += 1;
        $get += 200000;
    }else if (count(array_diff($red_true,$red_balls)) == 1 && $blue_balls == $blue_true) {//3等奖
        $award3 += 1;
        $get += 3000;
    }else if (count(array_diff($red_true,$red_balls)) == 1) {//4等奖
        $award4 += 1;
        $get += 200;
    }else if (count(array_diff($red_true,$red_balls)) == 2 && $blue_balls == $blue_true) {//4等奖
        $award4 += 1;
        $get += 200;
    }else if (count(array_diff($red_true,$red_balls)) == 2) {//5等奖
        $award5 += 1;
        $get += 10;
    }else if (count(array_diff($red_true,$red_balls)) == 3 && $blue_balls == $blue_true) {//5等奖
        $award5 += 1;
        $get += 10;
    }else if ($blue_balls == $blue_true) {//6等奖
        $award6 += 1;
        $get += 5;
    }
    echo '一等奖✖'.$award1,' 2等奖✖'.$award2.' 3等奖✖'.$award3.' 4等奖✖'.$award4.' 5等奖✖'.$award5.' 6等奖✖'.$award6.' 花费'.$pay.' 中奖'.$get."\n";
    if ($count % 10000 == 0) {
        sleep(1);
    }
}