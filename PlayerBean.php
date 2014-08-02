<?php
	class PlayerBean
	{
		private $playerId;
		private $name;
		private $goalCount;
		private $redCard;
		private $yellowCard;
		private $teamId;
		private $competitionId;

		public function setPlayerId($playerId){
			$this->playerId=$playerId;
		}

		public function getPlayerId(){
			return $this->playerId;
		}

		public function setName($name){
			$this->name=$name;
		}

		public function getName(){
			return $this->name;
		}

		public function setGoalCount($goalCount){
			$this->goalCount=$goalCount;
		}

		public function getGoalCount(){
			return $this->goalCount;
		}

		public function setRedCard($redCard){
			$this->redCard=$redCard;
		}

		public function getRedCard(){
			return $this->redCard;
		}

		public function setYellowCard($yellowCard){
			$this->yellowCard=$yellowCard;
		}

		public function getYellowCard(){
			return $this->yellowCard;
		}

		public function setTeamId($teamId){
			$this->teamId=$teamId;
		}

		public function getTeamId(){
			return $this->teamId;
		}

		public function setCompetitionId($competitionId){
			$this->competitionId=$competitionId;
		}

		public function getCompetitionId(){
			return $this->competitionId;
		}

		public function toJson()
		{
			return urldecode (json_encode( array("playerId"=>$this->playerId,"name"=>urlencode($this->name),"goalCount"=>$this->goalCount,"redCard"=>$this->redCard,"yellowCard"=>$this->yellowCard,"teamId"=>$this->teamId, "competitionId"=>$this->competitionId) ) );
		}

		public static function arrayToJson($players)
		{
			$result='[';
			$arrayCount=(count($players));
			for ($i=0; $i<$arrayCount; $i++)
    		{
    			$item=$players[$i];
        		$result=$result.$item->toJson();
        		if ($i<$arrayCount-1)
        		{
           		 	$result=$result.',';
        		}
    		}
    		$result=$result.']';
    		return $result;	
		} 

	}
?>