<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 22/09/17
 * Time: 16:30
 */

namespace pure\util;


use pure\Collection;

class APIUtilFactory {
  public static function /*Optional<Entity>*/ findIncluded($included, $type, $id) {
    return Collection::find($included, function($incl) use($type, $id) {
      return $incl->type === $type && $incl->id === $id;
    });
  }
  public static function /*[Entity]*/ findIncludedByType($included, $type) {
    return Collection::filter($included, function ($incl) use ($type) {
      return $incl->type === $type;
    });
  }
}