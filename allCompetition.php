<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('CompetitionDao.php');


	$competitionDao=CompetitionDao::sharedCompetitionDao();

	$results=$competitionDao->getAllCompetition($type,$limit);
	
	echo CompetitionBean::arrayToJson($results);
?>