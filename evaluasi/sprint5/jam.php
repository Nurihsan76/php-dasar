<?php

require_once "vendor/autoload.php";


use Carbon\Carbon;

printf("Right now is %s", Carbon::now()->toDateTimeString());



?>