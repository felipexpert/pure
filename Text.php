<?php

namespace pure;

class Text {

  private function __construct() {}

  public static function join($texts, $separator = ',') {
    $count = count($texts);
    return Collection::foldl($texts, function($zero, $text, $k) use($separator, $count) { 
      return $k + 1 == $count
        ? $zero . $text
        : $zero . $text . $separator;
    }, '');
  }

}
