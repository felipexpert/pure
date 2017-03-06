<?php

namespace pure;


class ViewHelper {
  private function __construct() {}

  public static function selectOpt($value, $text, $selected = false)  {
    $option = "<option value='$value'";
    $option .= $selected ? ' selected' : '';
    $option .= ">$text</option>";
    return $option;
  }

  public static function selectOpts($array, $selected, $firstEmpty = true) {
    $opts = Collection::map($array, function($a) use($selected) {
      return static::selectOpt($a[0], $a[1], $selected->isPresent() && $selected->get() == $a[0]);
    });
    $opts2 = $firstEmpty
      ? Collection::prepend(static::selectOpt('', 'SELECIONE'), $opts)
      : $opts;
    return Text::join($opts2, '');
  }

  public static function selectAttrOpt($attr, $text, $selected = false)  {
    $option = "<option $attr";
    $option .= $selected ? ' selected' : '';
    $option .= ">$text</option>";
    return $option;
  }

  public static function selectAttrOpts($array, $selected, $firstEmpty = true) {
    $opts = Collection::map($array, function($a) use($selected) {
      return static::selectAttrOpt($a[0], $a[1], $selected->isPresent() && $selected->get() == $a[0]);
    });
    $opts2 = $firstEmpty
      ? Collection::prepend(static::selectAttrOpt('', 'SELECIONE'), $opts)
      : $opts;
    return Text::join($opts2, '');
  }

  public static function checkbox($nome, $checked = false) {
    $checkbox = '<input type="checkbox" value="1" ';
    $checkbox .= "id=\"$nome\" ";
    $checkbox .= "name=\"$nome\" ";
    
    if($checked) $checkbox .= ' checked ';
    
    $checkbox .= '>';
        
    return $checkbox;
  }
}
