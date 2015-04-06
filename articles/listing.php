<?php    
  $path = "/var/www/rkuykendall/articles/";
  $dir = opendir($path);
  $list = array();
  while($file = readdir($dir)){
      if ($file != '.' and $file != '..' and substr($file, $file.Length-4) != '.php') {
          // add the filename, to be sure not to
          // overwrite a array key
          include $file.'/vars.php';
          $list[$published.$file] = $file;
      }
  }
  closedir($dir);
  krsort($list);
  
  foreach($list as $date => $folder) {
      include($folder.'/vars.php');
    	print "<li><a href=\"/articles/".$folder."/\">".$title."</a> &mdash; ".date("M. jS, 'y", $published)."</li>\n";
  }
?>