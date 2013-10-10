<?php

if(isset($_POST['wikipage'])) {
    $html = @file_get_contents("http://en.wikipedia.org/wiki/".$_POST['wikipage']);
    if($html) {
        echo $html;
    }else{
        echo 'error';
    }
}
?>