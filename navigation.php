<?php
  function nav_item($url, $name) 
  {
      $current = $_SERVER['REQUEST_URI'];
      $current = str_replace('index.php','',$current);
      $current = str_replace('/','',$current);
      $current = str_replace('/','',$current);
      if ($current == str_replace('/','',$url)) {
        $class = " class=\"current\"";
      }
      return "<li".$class."><a href=\"".$url."\">".$name."</a></li>\n"; 
  }
  
?>

      <ul>
        <!-- <li>rkuykendall.com</li> -->
        <?php print nav_item("/", "About &amp; Contact"); ?>
        <?php print nav_item("/articles/", "Articles"); ?>
        <?php print nav_item("/design/", "Design"); ?>
      </ul>
