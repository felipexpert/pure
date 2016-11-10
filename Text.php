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

  public static function removeChars($string, $chars) {
    $output = '';
    $length = strLen($string);
    for($i = 0; $i < $length; $i++) {
      $elem = subStr($string, $i, 1); 
      forEach($chars as $c) if($elem == $c)
        continue 2;
      $output .= $elem;
    }
    return $output;
  }

  public static function escapeQuery($query, $args) {
    $escapedArgs = [];
    forEach($args as $arg) 
      $escapedArgs[] = mysql_real_escape_string($arg);
    $escaped = $query;
    forEach($escapedArgs as $key => $value) {
      $pos = $key + 1;
      $escaped = str_replace('?' . $pos, $value, $escaped);
    }
    return $escaped;
  }

  public static function regReplace($reg, $replacer = null, $text = null) {
    if(is_null($replacer))
      return function($replacer, $text = null) use($reg) { return Text::replace($reg, $replacer, $text); };
    if(is_null($text))
      return function($text) use($reg, $replacer) { return Text::replace($reg, $replacer, $text); };
    return preg_replace($reg, $replacer, $text);
  }

  public static function isCNPJValid($cnpj) {
    $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
    // Valida tamanho
    if (strlen($cnpj) != 14)
      return false;
    // Valida primeiro dígito verificador
    for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
      $soma += $cnpj{$i} * $j;
      $j = ($j == 2) ? 9 : $j - 1;
    }
    $resto = $soma % 11;
    if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
      return false;
    // Valida segundo dígito verificador
    for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
      $soma += $cnpj{$i} * $j;
      $j = ($j == 2) ? 9 : $j - 1;
    }
    $resto = $soma % 11;
    return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
  }

  public static function isCPFValid($cpf = null) {
   
    // Verifica se um número foi informado
    if(empty($cpf)) {
      return false;
    }
 
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
      return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
      $cpf == '11111111111' || 
      $cpf == '22222222222' || 
      $cpf == '33333333333' || 
      $cpf == '44444444444' || 
      $cpf == '55555555555' || 
      $cpf == '66666666666' || 
      $cpf == '77777777777' || 
      $cpf == '88888888888' || 
      $cpf == '99999999999') {
      return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
      for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
          $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
          return false;
        }
      }

      return true;
    }
  }
}
