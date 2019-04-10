<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

//printf("Now: %s", Carbon::now());

$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();

//echo $lastWeek;

$officialDate = Carbon::now()->toRfc2822String();

echo $officialDate;