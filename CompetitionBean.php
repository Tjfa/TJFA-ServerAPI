<?php
	class CompetitionBean 
	{
		private $competitionId;
		private $isStart;
		private $name;
		private $number;
		private $time;
		private $type;

		function __construct()
		{
		}

		public function setCompetitionId($competitionId){
			$this->competitionId=$competitionId;
		}

		public function getCompetitionId(){
			return $this->competitionId;
		}

		public function setIsStart($isStart){
			$this->isStart=$isStart;
		}

		public function getIsStart(){
			return $this->isStart;
		}

		public function setNumber($number){
			$this->number=$number;
		}

		public function getNumber(){
			return $this->number;
		}

		public function setName($name){
			return $this->name=$name;
		}

		public function getName(){
			return $this->name;
		}

		public function setTime($time){
			$this->time=$time;
		}

		public function getTime(){
			return $this->time;
		}

		public function setType($type){
			$this->type=$type;
		}

		public function getType(){
			return $this->type;
		}

		public function toJson()
		{
			return urldecode (json_encode( array("competitionId"=>$this->competitionId,"name"=>urlencode($this->name),"isStart"=>urlencode($this->isStart),"number"=>urlencode($this->number),"time"=>urlencode($this->time),"type"=>$this->type ) ) );
		}

		public static function arrayToJson($competitions)
		{
			$result='[';
			$arrayCount=(count($competitions));
			for ($i=0; $i<$arrayCount; $i++)
    		{
    			$item=$competitions[$i];
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