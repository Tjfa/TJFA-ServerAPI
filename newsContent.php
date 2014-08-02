<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('NewsDao.php');


	 $newsId=$_GET['newsId'];

	$newsDao=NewsDao::sharedNewsDao();

	echo $newsDao->getNewsContent($newsId);

?>