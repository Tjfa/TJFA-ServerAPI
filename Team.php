<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('TeamDao.php');

	//$competitionId=$_POST['competitionId'];

	$competitionId=$_GET['competitionId'];

	$teamDao=TeamDao::sharedTeamDao();

	$results=$teamDao->getTeams($competitionId);

	echo TeamBean::arrayToJson($results);
?>