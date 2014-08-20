<?php
	ini_set('memory_limit','56M');
	include_once ('Database.php');
	include_once ('NewsBean.php');

	class NewsDao
	{
		private static $_sharedNewsDao=null;


		function __construct()
		{
		}

		public function sharedNewsDao()
		{
			if (self::$_sharedNewsDao==null){
				self::$_sharedNewsDao=new NewsDao();
			}
			return self::$_sharedNewsDao;
		}

		public function setNewsWithRow($row)
		{

			$news=new NewsBean();
			$news->setNewsId($row['newsId']);
			$news->setTitle($row['title']);
			$news->setDate($row['date']);
			$news->setContent($row['content']);
			$news->setPreContent($row['preContent']);
			return $news;
		}

		public function getLatestNews($limit)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM News order by newsId desc limit $limit";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$newses=array();
			while ($row=mysql_fetch_array($result)){
				$news=$this->setNewsWithRow($row);
				array_push($newses, $news);	
			}
			
			return $newses;
		}

		public function getEarlierNews($newsId,$limit)
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM News where newsId<$newsId order by newsId desc limit $limit";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$newses=array();
			while ($row=mysql_fetch_array($result)){
				$news=$this->setNewsWithRow($row);
				array_push($newses, $news);	
			}
			
			return $newses;
		}

		public function getNewsContent($newsId)
		{

			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="SELECT * FROM News where newsId=$newsId limit 1";

			$result=mysql_query($sql);
			$database->closeDatabase();

			$row=mysql_fetch_array($result);
			$news=$this->setNewsWithRow($row);
			return urldecode (json_encode( array("content"=>$row['content'])));
		}

		public function getNewsCount()
		{
			$database=Database::sharedDatabase();
			$database->connectDatabase();
			$sql="select count(newsId) from News";
			$result=mysql_query($sql);
			$database->closeDatabase();

			$row=mysql_fetch_array($result);

			return $row[0];	
		}

	}
