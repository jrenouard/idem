<?php
header('Content-Type: text/plain; charset=UTF-8');

mysql_connect('localhost', 'root', 'root');
mysql_select_db('test');
mysql_query("SET NAMES utf8");

if(isset($_POST['action']) && $_POST['action'] == 'subscribe') {
    echo json_encode($_POST);
}


if(isset($_POST['action']) && $_POST['action'] == 'get_region') {
    $qregion = 'SELECT * FROM geo_regions WHERE country_id = '.intval($_POST['id_pays']).' ORDER BY region';
    $rregion = mysql_query($qregion) or die(mysql_error());
    $str = "<select name='region' id='region'>";
    while ($oregion = mysql_fetch_object($rregion)) {
        $str .= "<option value='".$oregion->id."'>".$oregion->region."</option>";
    }
    $str .= "</select>";
    echo $str;
}

if(isset($_POST['action']) && $_POST['action'] == 'get_ville') {
    $qville = 'SELECT * FROM geo_cities2 WHERE region_id = '.intval($_POST['id_region']).' ORDER BY city';
    $rville = mysql_query($qville) or die(mysql_error());
    $str = "<select name='ville' id='ville'>";
    while ($oville = mysql_fetch_object($rville)) {
        $str .= "<option value='".$oville->id."'>".$oville->city."</option>";
    }
    $str .= "</select>";
    echo $str;
}