<?php

$currentDate = new DateTime('2019-05-13');
$h = 10;
while ($h>=0){
$currentDate->modify('+7 day');

$h -= 4;
}
printf("\nThe maya dooms day is at %s ?!", date_format($currentDate, 'D, M d Y'));
?>