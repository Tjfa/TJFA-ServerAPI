<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('PlayerDao.php');
	include_once ('TeamDao.php');

	//$competitionId=$_POST['competitionId'];

	$competitionId=$_GET['competitionId'];

	$playerDao=PlayerDao::sharedPlayerDao();

	$resultsPlayer=$playerDao->getPlayers($competitionId);
	$players=PlayerBean::arrayToJson($resultsPlayer);

	$teamDao=TeamDao::sharedTeamDao();

	$resultsTeam=$teamDao->getTeams($competitionId);
	$teams=TeamBean::arrayToJson($resultsTeam);

	echo '{"teams":'.$teams.',"players":'.$players.'}';
?>