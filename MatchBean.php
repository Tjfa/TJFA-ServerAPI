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
		private $teamA;
		private $teamB;

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

		public function setTeamA($teamA){
			$this->teamA=$teamA;
		}

		public function getTeamA(){
			return $this->$teamA;
		}

		public function setTeamB($teamB){
			$this->teamB=$teamB;
		}

		public functin getTeamB(){
			return $this->teamB;
		}
	}
?>