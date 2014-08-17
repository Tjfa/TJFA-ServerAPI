<?php

	header("Content-Type:text/json; charset=utf8");

	include_once ('TeamDao.php');

	$teamDao=TeamDao::sharedTeamDao();

	$results=$teamDao->getTeamCount()
?>