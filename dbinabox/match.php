<?php
	header("Content-Type:text/html; charset=utf8");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsiv.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap_adapt.css">

		<script src="script/jquery.1.9.1.js"></script>
		<script src="script/bootstrap.min.js"></script>
		<script src="script/jquery.dataTables.1.9.4.js"></script>
		<script src="script/dataTables.bootstrap.js"></script>

		<script src="script/match.js"></script>
      
	</head>

	<body>

		<!-- header -->
		<?php include_once('navigation.php') ?>

		<div class="container">
			<div class="container" style="margin-top:20px">
				<table class="table table-striped table-bordered table-hover datatable dataTable" id="competitionTable" >
					<thead>
						<tr>
							<th style="width:5%">MatchId</th>
							<th style="width:5%">ComId</th>
							<th style="width:8%;">比赛性质</th>
							<th style="width:16%">日期</th>
							<th style="width:10%">是否开始</th>
							<th style="width:13%">A 队</th>
							<th style="width:13%">B 队</th>
							<th style="width:7%">进球(A)</th>
							<th style="width:7%">进球(B)</th>
							<th style="widht:7%">点球(A)</th>
							<th style="widht:7%">点球(B)</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>

	</body>

</html>