<?php
# define which path is to explore:
// $path=$_SESSION['include_rootPath'];
$path = '/Users/julien/travail/sites/farma/';
?>
<script>
function toggleBloc(id) {
  var ul = 'ul_'+id;
  var a  = 'cross_'+id;
  if(document.getElementById(ul).style.display == 'block') {
    document.getElementById(a).innerHTML = '+';
    document.getElementById(ul).style.display = 'none';
  }else{
    document.getElementById(a).innerHTML = '-';
    document.getElementById(ul).style.display = 'block';
  }
}
</script>
<div>
  <?php echo $path;
dir_list($path); # recursively display path contents ?>
</div>
<?php
#------------------------------------------------------------------------------
function dir_list($path, $display = 'block') {
  if(!$dir=opendir($path)) {
    echo $path.' introuvable';
  }
  else {
    ?><ul style="line-height:1.3em; list-style:none;display:<?= $display;?>" id="ul_<?= $GLOBALS['i']; ?>"><?php
    while(($item=readdir($dir))!==false) {
      if(in_array($item,array('.','..'))) {
        continue;
      }
      ?><li><?php echo $item;
      $full_path=$path.$item;
      switch(true) {
        case(is_dir($full_path)):
          echo " <a id='cross_".($GLOBALS['i']+1)."' href='javascript:void(0);' onclick=\"toggleBloc('".($GLOBALS['i']+1)."');\">+</a>";
          $GLOBALS['i']++;
          dir_list($full_path.'/', 'none');
          break;
        case(is_link($full_path)):
          ?> (raccourci)<?php
          break;
        case(is_file($full_path)):
          ?> (fichier<?php echo
            @filesize($full_path)===false?
              null
            :
              (', '.filesize($full_path).' octets')
            ;
            ?>)<?php
          break;
        default:
          ?> (???)<?php
      }
      ?></li><?php
    }
    ?></ul><?php
  }
  closedir($dir);
}
#------------------------------------------------------------------------------
?>
