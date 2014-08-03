<?php
	class TeamBean
	{
		private $teamId;
		private $emblemPath;
		private $groupGoalCount;
		private $groupMissCount;
		private $goalCount;
		private $missCount;

		private $groupWinCount;
		private $groupLostCount;
		private $groupDrawCount;
		private $winCount;
		private $lostCount;
		
		private $groupNo;
		private $name;
		private $score;
		private $competitionId;
		private $rank;

		public function setTeamId($teamId){
			$this->teamId=$teamId;
		}

		public function getTeamId(){
			return $this->teamId;
		}

		public function setEmblemPath($emblemPath){
			$this->emblemPath=$emblemPath;
		}

		public function getEmblemPath(){
			return $this->emblemPath;
		}

		public function setGroupGoalCount($groupGoalCount){
			$this->groupGoalCount=$groupGoalCount;
		}

		public function getGoalGoalCount(){
			return $this->groupGoalCount;
		}

		public function setGroupMissCount($groupMissCount){
			$this->groupMissCount=$groupMissCount;
		}

		public function getGroupMissCount(){
			return $this->groupMissCount;
		}

		public function setGoalCount($goalCount){
			$this->goalCount=$goalCount;
		}

		public function getGoalCount(){
			return $this->goalCount;
		}

		public function setMissCount($missCount){
			$this->missCount=$missCount;
		}

		public function getMissCount(){
			return $this->missCount;
		}

		public function setGroupWinCount($groupWinCount){
			$this->groupWinCount=$groupWinCount;
		}

		public function getGroupWinCount(){
			return $this->groupWinCount;
		}

		public function setGroupLostCount($groupLostCount){
			$this->groupLostCount=$groupLostCount;
		}

		public function getGroupLostCount(){
			return $this->groupLostCount;
		}

		public function setGroupDrawCount($groupDrawCount){
			$this->groupDrawCount=$groupDrawCount;
		}

		public function getGroupDrawCount(){
			return $this->groupDrawCount;
		}

		public function setWinCount($winCount){
			$this->winCount=$winCount;
		}

		public function getWinCount(){
			return $this->winCount;
		}

		public function setLostCount($lostCount){
			$this->lostCount=$lostCount;
		}

		public function getLostCount(){
			return $this->lostCount;
		}

		public function setGroupNo($groupNo){
			$this->groupNo=$groupNo;
		}

		public function getGroupNo(){
			return $this->groupNo;
		}

		public function setName($name){
			$this->name=$name;
		}

		public function getName(){
			return $this->name;
		}

		public function setScore($score){
			$this->score=$score;
		}

		public function getScore(){
			return $this->score;
		}

		public function setCompetitionId($competitionId){
			$this->competitionId=$competitionId;
		}

		public function getCompetitionId(){
			return $this->competitionId;
		}

		public function setRank($rank){
			$this->rank=$rank;
		}

		public function getRank(){
			return $this->rank;
		}

		public function toJson()
		{
			return urldecode (json_encode( array("teamId"=>$this->teamId,"emblemPath"=>urlencode($this->emblemPath),"groupGoalCount"=>$this->groupGoalCount,"groupMissCount"=>$this->groupMissCount,"goalCount"=>$this->goalCount,"missCount"=>$this->missCount, "groupWinCount"=>$this->groupWinCount,"groupLostCount"=>$this->groupLostCount,"groupDrawCount"=>$this->groupDrawCount,"winCount"=>$this->winCount,"missCount"=>$this->missCount,"groupNo"=>urlencode($this->groupNo),"name"=>urlencode($this->name),"score"=>$this->score,"competitionId"=>$this->competitionId,"rank"=>$this->rank ) ) );
		}

		public static function arrayToJson($teams)
		{
			$result='[';
			$arrayCount=(count($teams));
			for ($i=0; $i<$arrayCount; $i++)
    		{
    			$item=$teams[$i];
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