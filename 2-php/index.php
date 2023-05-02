<?php

require('Brackets.php');
require('Test.php');

$checkValidity = function(string $value) {
  $brackets = new Brackets($value);
  return $brackets->isValid();
};

Test::run('{{lajkdhf{adfa}{}adfasdfadf{}}}', $checkValidity, true);
Test::run('{{lajkdhf{adfa', $checkValidity, false);
Test::run('{{{{}}}', $checkValidity, false);
Test::run('{{{{{}}}}}', $checkValidity, true);
Test::run('{{a}{b}{{c}}d}', $checkValidity, true);
Test::run('{{a}{b}{{c}}d}}', $checkValidity, false);
