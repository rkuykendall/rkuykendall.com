<?php
  error_reporting(E_ALL ^ E_NOTICE);  
  include("../FeedWriter/FeedTypes.php");
  $TestFeed = new RSS2FeedWriter();
  $TestFeed->setTitle('Robert Kuykendall');
  $TestFeed->setLink('http://rkuykendall.com/articles/rss');
  $TestFeed->setDescription(
        'This is test of creating a RSS 2.0 feed Universal Feed Writer'
  );
  $TestFeed->setImage('Testing the RSS writer class',
        'http://www.ajaxray.com/projects/rss',
        'http://www.rightbrainsolution.com/images/logo.gif');

$TestFeed->setChannelElement('language', 'en-us');
$TestFeed->setChannelElement('pubDate', date(DATE_RSS, time()));

  $path = "/var/www/rkuykendall/articles/";
  $dir = opendir($path);
  $list = array();
  while($file = readdir($dir)){
      if ($file != '.' and $file != '..' and substr($file, $file.Length-4) != '.php'){
          // add the filename, to be sure not to
          // overwrite a array key
          $ctime = filectime($path . $file) . ',' . $file;
          $list[$ctime] = $file;
      }
  }
  closedir($dir);
  krsort($list);
  
  foreach($list as $date => $article) {
    	$title = file_get_contents($path.$article."/title.html",true);
        
        $newItem = $TestFeed->createNewItem();
        $newItem->setTitle($title);
        $newItem->setLink('http://rkuykendall.com/articles/'.$article.'/');
        $newItem->setDate($date);
        // $newItem->setDescription('Test Desc');
        $TestFeed->addItem($newItem);
        $newItem->addElement('author', 'robert@rkuykendall.com (Robert Kuykendall)');
  }
  
  $TestFeed->generateFeed();