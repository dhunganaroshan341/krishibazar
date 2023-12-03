<?php
class StyleLoader{
    function loadIt($css){
      if($css =="navbar"){
        return file_get_contents('css/navbar.css');
      }

    }
}

$styleObj = new StyleLoader;

?>