<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('NewsDao.php');

	//$limit=$_POST['limit'];
	//$newsId=$_POST['newsId'];

	 $limit=$_GET['limit'];
	 $newsId=$_GET['newsId'];

	$newsDao=NewsDao::sharedNewsDao();

	if ($newsId==-1){
		$results=$newsDao->getLatestNews($limit);
	}
	else{
		$results=$newsDao->getEarlierNews($newsId,$limit);
	}

	echo NewsBean::arrayToJson($results);
?>