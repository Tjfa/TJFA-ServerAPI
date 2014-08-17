<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('MatchDao.php');
	include_once ('TeamDao.php');

	$competitionId=$_GET['competitionId'];

	$matchDao=MatchDao::sharedMatchDao();

	$resultsMatch=$matchDao->getAllMatches();
	$matches=MatchBean::arrayToJson($resultsMatch);

	$teamDao=TeamDao::sharedTeamDao();

	$resultsTeam=$teamDao->getAllTeams();
	$teams=TeamBean::arrayToJson($resultsTeam);

	echo '{"teams":'.$teams.',"matches":'.$matches.'}';
?>