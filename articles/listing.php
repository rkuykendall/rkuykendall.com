<?php    
  $path = "/var/www/rkuykendall/articles/";
  $dir = opendir($path);
  $list = array();
  while($file = readdir($dir)){
      if ($file != '.' and $file != '..' and substr($file, $file.Length-4) != '.php') {
          // add the filename, to be sure not to
          // overwrite a array key
          include $file.'/date.php';
          $ctime = $published;
          // $ctime = filectime($path . $file) . ',' . $file;
          $list[$ctime.$file] = $file;
      }
  }
  closedir($dir);
  krsort($list);
  
  foreach($list as $date => $article) {
    	$title = file_get_contents($path.$article."/title.html",true);
    	print "<li><a href=\"/articles/".$article."/\">".$title."</a> &mdash; ".date("M. jS, 'y", $date)."</li>\n";
  }
?>