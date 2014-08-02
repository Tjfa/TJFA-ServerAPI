<?php
	ini_set('memory_limit','56M');
	include_once ('Database.php');
	include_once ('MatchBean.php');

	class MatchDao 
	{
		private static $_sharedMatchDao=null;

		function __construct()
		{
		}

		public static function sharedMatchDao(){
			if (self::$_sharedMatchDao==null){
				self::$_sharedMatchDao=new MatchDao();
			}
			return self::$_sharedMatchDao;
		}

		public function setMatchWithRow($row){

			$match=new MatchBean();
			$match->setMatchId($row['matchId']);
			$match->setDate($row['date']);
			$match->setIsStart($row['isStart']);
			$match->setMatchProperty($row['matchProperty']);
			$match->setScoreA($row['scoreA']);
			$match->setScoreB($row['scoreB']);
			$match->setWinTeamId($row['winTeamId']);
			$match->setCompetitionId($row['competitionId']);
			$match->setTeamAId($row['teamAId']);
			$match->setTeamBId($row['teamBId']);
			$match->setPenaltyA($row['penaltyA']);
			$match->setPenaltyB($row['penaltyB']);
			return $match;
		}

		public function getMatches($competitionId)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Game WHERE competitionId=$competitionId" ;
			$result=mysql_query($sql);
			$database->closeDatabase();

			$matches=array();
			while ($row=mysql_fetch_array($result)){
				$match=$this->setMatchWithRow($row);
				array_push($matches, $match);	
			}
			
			return $matches;
		}
	}

?>