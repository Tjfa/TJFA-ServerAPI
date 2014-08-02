<?php
	class NewsBean
	{
		private $newsId;
		private $title;
		private $preContent;
		private $content;
		private $date;

		public function setNewsId($newsId){
			$this->newsId=$newsId;
		}

		public function getNewsId(){
			return $this->newsId;
		} 

		public function setTitle($title){
			$this->title=$title;
		}

		public function getTitle(){
			return $this->title;
		}

		public function setPreContent($preContent){
			return $this->preContent=$preContent;
		}

		public function getPreContent(){
			return $this->preContent;
		}

		public function setContent($content){
			$this->content=$content;
		}

		public function getContent(){
			return $this->content;
		}

		public function setDate($date){
			$this->date=$date;
		}

		public function getDate(){
			return $this->date;
		}

		public function toSimpleJson(){
			return urldecode (json_encode( array("newsId"=>$this->newsId,"title"=>urlencode($this->title),"preContent"=>urlencode($this->preContent),"date"=>urlencode($this->date) ) ) );
		}

		public static function arrayToJson($news)
		{
			$result='[';
			$arrayCount=(count($news));
			for ($i=0; $i<$arrayCount; $i++)
    		{
    			$item=$news[$i];
        		$result=$result.$item->toSimpleJson();
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