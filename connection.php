<?php


class Pont
{
 public static function validerTaill($taill):bool
  {
    if($taill>50){
        // trigger_error("trops large",
        // E_USER_ERROR);
        echo 'error';
        // return false;
    }
    return true;
  }

}
$T1 = Pont::validerTaill(23);
$T2 = Pont::validerTaill(122);
var_dump($T1);
