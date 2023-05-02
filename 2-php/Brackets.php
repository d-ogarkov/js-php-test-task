<?php

class Brackets {
  private string $codeString;

  public function __construct(string $codeString) {
    $this->codeString = $codeString;
  }

  public function isValid() : bool {
    $length = mb_strlen($this->codeString);
    $count = 0;

    for ($i = 0; $i < $length; $i++) {
      $char = mb_substr($this->codeString, $i, 1);
      if ($char === '{') {
        $count++;
      }
      else if ($char === '}') {
        $count--;
      }
    }
    return ($count === 0);
  }

}