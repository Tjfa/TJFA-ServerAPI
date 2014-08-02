<?php
	class MatchBean
	{
		private $date;
		private $matchId;
		private $isStart;
		private $matchProperty;
		private $scoreA;
		private $scoreB;
		private $winTeamId;
		private $penaltyA;
		private $penaltyB;
		private $teamAId;
		private $teamBId;
		private $competitionId;
  		
		public function setCompetitionId($competitionId){
			$this->competitionId=$competitionId;
		}

		public function getCompetitionId(){
			return $this->competitionId;
		}

		public function getDate(){
			return $this->date;
		}

		public function setDate($date){
			$this->date=$date;
		}

		public function getMatchId(){
			return $this->matchId;
		}

		public function setMatchId($matchId){
			$this->matchId=$matchId;
		}

		public function getIsStart(){
			return $this->isStart;
		}

		public function setIsStart($isStart){
			$this->isStart=$isStart;
		}

		public function getMatchProperty(){
			return $this->matchProperty;
		}

		public function setMatchProperty($matchProperty){
			$this->matchProperty=$matchProperty;
		}

		public function setScoreA($scoreA){
			$this->scoreA=$scoreA;
		}

		public function getScoreA(){
			return $this->scoreA;
		}

		public function setScoreB($scoreB){
			$this->scoreB=$scoreB;
		}

		public function getScoreB(){
			return $this->scoreB;
		}

		public function setWinTeamId($winTeamId){
			$this->winTeamId=$winTeamId;
		}

		public function getWinTeamId(){
			return $this->winTeamId;
		}

		public function setPenaltyA($penaltyA){
			$this->penaltyA=$penaltyA;
		}

		public function getPenaltyA(){
			return $this->penaltyA;
		}

		public function setPenaltyB($penaltyB){
			$this->penaltyB=$penaltyB;
		}

		public function getPenaltyB(){
			return  $this->penaltyB;
		}

		public function setTeamAId($teamAId){
			$this->teamAId=$teamAId;
		}

		public function getTeamAId(){
			return $this->$teamAId;
		}

		public function setTeamBId($teamBId){
			$this->teamBId=$teamBId;
		}

		public function getTeamBId(){
			return $this->teamBId;
		}

		public function toJson()
		{
			return urldecode (json_encode( array("matchId"=>$this->matchId,"date"=>urlencode($this->date),"isStart"=>$this->isStart,"matchProperty"=>$this->matchProperty,"scoreA"=>$this->scoreA,"scoreB"=>$this->scoreB, "winTeamId"=>$this->winTeamId,"teamAId"=>$this->teamAId,"teamBId"=>$this->teamBId,"penaltyA"=>$this->penaltyA,"penaltyB"=>$this->penaltyB ,"competitionId"=>$this->competitionId) ) );
		}

		public static function arrayToJson($matches)
		{
			$result='[';
			$arrayCount=(count($matches));
			for ($i=0; $i<$arrayCount; $i++)
    		{
    			$item=$matches[$i];
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