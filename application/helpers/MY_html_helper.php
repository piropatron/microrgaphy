<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('accordion')){
    function accordion($root_directory){
        $result = '';
        foreach ($root_directory as $directory_name => $directory_content) {
            $result .= '<div class="accordion" >';
            $result .=      '<h1>'.$directory_name.'</h1>';
            $result .=      '<div>';
            $result .=      '<ul>';
            if(is_array($directory_content)){
                foreach ($directory_content as $content_name => $content) {
                    if(is_array($content)){
                        $result .= '<li>'.accordion( array($content_name => $content)).'</li>' ;
                    }else{

                        $result .= '<li>'.$content.'</li>' ;
                    }
                }
            }else{
                $result .= '<li>'.$directory_content.'</li>' ;
            }

            $result .= '</ul>';


            $result .=  '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}

if ( ! function_exists('css')){
    function css($file_path){
    	$css_content = file_get_contents($file_path.CSS_EXT);
        $result = '<style type="text/css">'.$css_content.'</style>';
        return $result;
    }
}

if ( ! function_exists('js')){
    function js($file_path){
    	$js_content = file_get_contents($file_path.JS_EXT);
        $result = '<script type="text/javascript" >'.$js_content.'</script>';
        return $result;
    }
}
