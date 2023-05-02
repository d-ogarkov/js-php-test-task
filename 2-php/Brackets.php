<?php

class Brackets {
  private string $codeString;

  public function __construct(string $codeString) {
    $this->codeString = $codeString;
  }

  public function isValid() : bool {
    $length = mb_strlen($this->codeString);
    $nesting = 0;

    for ($i = 0; $i < $length; $i++) {
      $char = mb_substr($this->codeString, $i, 1);

      if ($char === '{') {
        $nesting++;
      }
      else if ($char === '}') {
        $nesting--;
      }

      if ($nesting < 0) break;
    }
    return ($nesting === 0);
  }

}