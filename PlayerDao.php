<?php
	ini_set('memory_limit','56M');
	include_once ('Database.php');
	include_once ('PlayerBean.php');

	class PlayerDao
	{
		private static $_sharedPlayerDao=null;

		function __construct()
		{
		}

		public static function sharedPlayerDao(){
			if (self::$_sharedPlayerDao==null){
				self::$_sharedPlayerDao=new PlayerDao();
			}
			return self::$_sharedPlayerDao;
		}

		function setPlayerWithRow($row)
		{
			$player=new PlayerBean();
			$player->setPlayerId($row['playerId']);
			$player->setName($row['name']);
			$player->setGoalCount($row['goalCount']);
			$player->setRedCard($row['redCard']);
			$player->setYellowCard($row['yellowCard']);
			$player->setTeamId($row['teamId']);
			$player->setCompetitionId($row['competitionId']);
			return $player;
		}

		public function getPlayers($competitionId)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Player WHERE competitionId=$competitionId" ;
			$result=mysql_query($sql);
			$database->closeDatabase();

			$players=array();
			while ($row=mysql_fetch_array($result)){
				$player=$this->setPlayerWithRow($row);
				array_push($players, $player);	
			}
			
			return $players;
		}

		public function getAllPlayers()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Player" ;
			$result=mysql_query($sql);
			$database->closeDatabase();

			$players=array();
			while ($row=mysql_fetch_array($result)){
				$player=$this->setPlayerWithRow($row);
				array_push($players, $player);	
			}
			
			return $players;

		}

		public function getPlayerCount()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="select count(playerId) from Player";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$row=mysql_fetch_array($result);

			return $row[0];	
		}


	}

?>