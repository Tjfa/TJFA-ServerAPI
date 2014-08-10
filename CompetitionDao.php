<?php
	ini_set('memory_limit','56M');
	include_once ('Database.php');
	include_once ('CompetitionBean.php');

	class CompetitionDao
	{
		private static $_sharedCompetitionDao=null;


		function __construct()
		{
		}

		public function sharedCompetitionDao()
		{
			if (self::$_sharedCompetitionDao==null){
				self::$_sharedCompetitionDao=new CompetitionDao();
			}
			return self::$_sharedCompetitionDao;
		}

		public function setCompetitionWithRow($row)
		{

			$competition=new CompetitionBean();
			$competition->setCompetitionId($row['competitionId']);
			$competition->setIsStart($row['isStart']);
			$competition->setName($row['name']);
			$competition->setTime($row['time']);
			$competition->setNumber($row['number']);
			$competition->setType($row['type']);
			return $competition;
		}

		public function getLatestCompetition($type,$limit)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Competition where type=$type order by competitionId desc limit $limit";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$competitions=array();
			while ($row=mysql_fetch_array($result)){
				$competition=$this->setCompetitionWithRow($row);
				array_push($competitions, $competition);	
			}
			
			return $competitions;
		}

		public function getEarlierCompetition($type,$competitionId,$limit)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Competition where type=$type and competitionId<$competitionId order by competitionId desc limit $limit";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$competitions=array();
			while ($row=mysql_fetch_array($result)){
				$competition=$this->setCompetitionWithRow($row);
				array_push($competitions, $competition);	
			}
			
			return $competitions;
		}

		public function getAllCompetition()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM Competition order by competitionId desc";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$competitions=array();
			while ($row=mysql_fetch_array($result)){
				$competition=$this->setCompetitionWithRow($row);
				array_push($competitions, $competition);	
			}
			
			return $competitions;
		}

	}
