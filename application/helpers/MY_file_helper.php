<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('dir_to_array')){
    function dir_to_array($dir) {
        $result = array();
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value){
            if (!in_array($value,array(".",".."))){
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)){
                    $result[$value] = dir_to_array($dir . DIRECTORY_SEPARATOR . $value);
                }else{
                    $result[] = $value;
                }
            }
        }
        return $result;
    }
}


