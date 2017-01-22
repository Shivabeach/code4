<?php
$date = new DateTime;
$ancestor = (new DateTime)->setDate(1775, 4, 15)->setTime(00,00,00);
$timeago = $date->diff($ancestor);
echo $timeago->format('%y Years %m Months %d days ago');
