<?php
	ini_set('memory_limit','56M');
	include_once ('Database.php');
	include_once ('TeamBean.php');

	class TeamDao
	{

		private static $_sharedTeamDao=null;
		function __construct()
		{
		}

		public static function sharedTeamDao(){
			if (self::$_sharedTeamDao==null){
				self::$_sharedTeamDao=new TeamDao();
			}
			return self::$_sharedTeamDao;
		}

		public function setTeamWithRow($row){

			$team=new TeamBean();
			$team->setTeamId($row['teamId']);
			$team->setEmblemPath($row['emblemPath']);
			$team->setGroupGoalCount($row['groupGoalCount']);
			$team->setGroupMissCount($row['groupMissCount']);
			$team->setGoalCount($row['goalCount']);
			$team->setMissCount($row['missCount']);
			$team->setGroupWinCount($row['groupWinCount']);
			$team->setGroupDrawCount($row['groupDrawCount']);
			$team->setGroupLostCount($row['groupLostCount']);
			$team->setWinCount($row['winCount']);
			$team->setLostCount($row['lostCount']);
			$team->setGroupNo($row['groupNo']);
			$team->setName($row['name']);
			$team->setScore($row['score']);
			$team->setCompetitionId($row['competitionId']);
			$team->setRank($row['rank']);
			return $team;
		}

		public function getTeams($competitionId)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Team WHERE competitionId=$competitionId" ;
			$result=mysql_query($sql);
			$database->closeDatabase();

			$teams=array();
			while ($row=mysql_fetch_array($result)){
				$team=$this->setTeamWithRow($row);
				array_push($teams, $team);	
			}
			
			return $teams;
		}

		public function getAllTeams()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Team " ;
			$result=mysql_query($sql);
			$database->closeDatabase();

			$teams=array();
			while ($row=mysql_fetch_array($result)){
				$team=$this->setTeamWithRow($row);
				array_push($teams, $team);	
			}
			
			return $teams;
		}

		public function getTeamCount()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="select count(teamId) from Team";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$row=mysql_fetch_array($result);

			echo $row[0];	
		}
	}

?>