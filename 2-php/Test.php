<?php

class Test {
  public static function run($value, callable $testFunction, $expectedResult) {
    $verdict = ($testFunction($value) === $expectedResult ? 'yes' : 'NO');
    echo "Returns ", var_export($expectedResult), " for ", var_export($value), ': ', $verdict, "\r\n";
  }
}