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

		<script src="script/player.js"></script>
      
	</head>

	<body>

		<!-- header -->
		<?php include_once('navigation.php') ?>

		<div class="container">
			<div class="container" style="margin-top:20px">
				<table class="table table-striped table-bordered table-hover datatable dataTable" id="competitionTable" >
					<thead>
						<tr>
							<th style="">playerId</th>
							<th style="">姓名</th>
							<th style="">ComId</th>
							<th style="">球队</th>
							<th style="">进球数</th>
							<th style="">黄牌</th>
							<th style="">红牌</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>

	</body>

</html>