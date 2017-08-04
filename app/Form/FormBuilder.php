<?php

namespace Form;
class FormBuilder
{
  public static function build($form_fields)
  {
    if(!empty($form_fields) && is_array($form_fields)){
      $str = '';
      foreach($form_fields as $name=>$field){
        switch ($field['type']) {
          case 'text' || 'password':
            $str .= self::buildInput($name, $field);
            break;
          case 'select':
            self::buildSelect($name, $field);
            break;
        }
      }
      return $str;
    }
  }

  private static function buildSelect($name, $options)
  {
  }

  private static function buildInput($name, $options)
  {
    return '
    <label>'.$options["label"].'</label>
    <input type="'.$options['type'].'" name="'.$name.'" id="'.$name.'" />';
  }
}