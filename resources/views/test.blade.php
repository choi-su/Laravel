<?php
require './vendor/autoload.php'; // 선언해 줌으로써 psr-4에 명시해줬던 네임스페이스를 자동으로 불러와준다 /app

use App\FirstClass; //includ_once(G5PATH."/app/FirstClass.php") 와 같다
use App\Other\SecondClass;
use App\Other\OtherClass;

print_r(FirstClass::sCodeTest());
print_r(SecondClass::sCodeTest());

$first = new FirstClass();
print_r($first->CodeTest());

$second = new SecondClass();
print_r($second->CodeTest());

print_r(OtherClass::CodeTest());