<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('TeamDao.php');
  	include_once ('CompetitionDao.php'); 
  	include_once ('PlayerDao.php');
  	include_once ('NewsDao.php');
  	include_once ('MatchDao.php');

	$teamDao=TeamDao::sharedTeamDao();
	$teamCount=$teamDao->getTeamCount();

	$competitionDao=CompetitionDao::sharedCompetitionDao();
	$competitionCount=$competitionDao->getCompetitionCount();

	$playerDao=PlayerDao::sharedPlayerDao();
	$playerCount=$playerDao->getPlayerCount();

	$newsDao=NewsDao::sharedNewsDao();
	$newsCount=$newsDao->getNewsCount();

	$matchDao=MatchDao::sharedMatchDao();
	$matchCount=$matchDao->getMatchCount();

	echo urldecode (json_encode( array("competitionCount"=>$competitionCount,"teamCount"=>$teamCount,"playerCount"=>$playerCount,"newsCount"=>$newsCount,"matchCount"=>$matchCount ) ) );

?>