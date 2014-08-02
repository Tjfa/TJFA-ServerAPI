<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('CompetitionDao.php');

	// $type=$_POST['type'];
	// $limit=$_POST['limit'];
	// $competitionId=$_POST['competitionId'];

	$type=$_GET['type'];
	$limit=$_GET['limit'];
	$competitionId=$_GET['competitionId'];

	$competitionDao=CompetitionDao::sharedCompetitionDao();

	if ($competitionId==-1){
		$results=$competitionDao->getLatestCompetition($type,$limit);
	}
	else{
		$results=$competitionDao->getEarlierCompetition($type,$competitionId,$limit);
	}

	echo CompetitionBean::arrayToJson($results);
?>