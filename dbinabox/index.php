<?php
	
	header("Content-Type:text/html; charset=utf8");

///////////////////////////////////////////////flurry////////////////////////////////////////////
	$content=file_get_contents("http://api.flurry.com/appMetrics/NewUsers?apiAccessCode=55GT55V8T5DFKGF8R747&apiKey=9BTNDJ79TJ5JST5TTF2B&startDate=2014-08-02&endDate=2014-12-31&country=all&groupBy=months","rb");

	//sb flurry 给 api 加一个 @ 符号 给你跪了
	$content=str_replace("@", "", $content);

	$content=json_decode($content);

	$totalUser=0;
	$usValue ;
	$cnValue ;
	$frValue ;
	$jpValue ;
	foreach ($content->country as $key=>$value) {
		$totalUser+=$value->day->value;
		if ( $value->country == "US" ) $usValue= $value;
		else if ($value->country == "CN" ) $cnValue= $value;
		else if ($value->country == "FR") $frValue=$value;
	}
?>

<html>

	<title>Dashboard</title>

	<header>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link hre="css/bootstrap-responsiv.css" rel="stylesheet" type="text/css" />
 		<link href="css/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css"/>

  		<style style="type/css">
 
			.container {
				text-align: center;
			}
	
			.feat-p {
				width: 48%;
				float: left;
				border-bottom: 1px #eee solid;
			}
	
			.feat h1 {
				font-size: 48px;
				margin-bottom: 5px;
			}
	
			.feat {
				text-align: center; 
			}

	
			.main_metric {
				padding-top: 23px;
				margin-bottom: 50px;
				height: 109px;
				margin-top: 40px;
			}
		
  		</style>

  		<script src="script/jquery.1.9.1.js"></script>
  		<script src="script/jquery-ui-1.9.2.custom.min.js"></script>
  		<script src="script/index.js"></script>

	</header>

	<body>

		<?php include_once('navigation.php') ?>

		<div class="main_metric">
			<div class="container">
				<h1 style="font-size: 100px;" > <?php echo  $totalUser?> </h1>
				<h4 style="margin-top: 50px;" > TJFA ( 2014 ) </h4>
			</div>
		</div>

		<div class="container">
			<div class="row" align="center">
				<p class="lead">
					<em style="margin-right: 2%;">"We are what we repeatedly do. Excellence, then, is not an act, but a habit."</em>
					- Aristotle
				</p>
			</div>
		</div>

		<hr>

		<div class="container">
			<div class="row">

				<div class="span6">


					<div class="feat-p">
						<div class="feat">
							<h1><?php  echo $cnValue->day->value; ?></h1>
								<p class="lead">China</p>
						</div>
					</div>


					<div class="feat-p">
						<div class="feat">
							<h1><?php echo $frValue->day->value; ?></h1>
								<p class="lead">France</p>
						</div>
					</div>

					<div class="feat-p">
						<div class="feat">
							<h1 id='competitionCount'>0</h1>
								<p class="lead">Competition</p>
						</div>
					</div>


					<div class="feat-p">
						<div class="feat">
							<h1 id='matchCount'>0</h1>
								<p class="lead">Match</p>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="feat-p">
						<div class="feat">
							<h1 id='newsCount'>0</h1>
								<p class="lead">News</p>
						</div>
					</div>


					<div class="feat-p">
						<div class="feat">
							<h1 id='ebay_total_tps'>0</h1>
								<p class="lead">Admin User</p>
						</div>
					</div>


				</div>


				<div class="span6">


					<div class="feat-p">
						<div class="feat">
							<h1><?php echo $usValue->day->value; ?></h1>
								<p class="lead">USA</p>
						</div>
					</div>


					<div class="feat-p">
						<div class="feat">
							<h1>0</h1>
								<p class="lead">Japan</p>
						</div>
					</div>

					<div class="feat-p">
						<div class="feat">
							<h1 id='teamCount'>0</h1>
								<p class="lead">Team</p>
						</div>
					</div>

					<div class="feat-p" >
						<div class="feat">
							<h1 id='playerCount'>0</h1>
								<p class="lead">Player</p>
						</div>
					</div>

					<div class="clearfix"></div>

				</div>

			</div>

		</div>



	</body>

</html>