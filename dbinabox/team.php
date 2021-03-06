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

		<script src="script/team.js"></script>
      
	</head>

	<body>

		<!-- header -->
		<?php include_once('navigation.php') ?>

		<div class="container">
			<div class="container" style="margin-top:20px">
				<table class="table table-striped table-bordered table-hover datatable dataTable" id="competitionTable" >
					<thead>
						<tr>
							<th style="">teamId</th>
							<th style="">队名</th>
							<th style="">ComId</th>
							<th style="">所在小组</th>
							<th style="">小组进球</th>
							<th style="">小组失球</th>
							<th style="">小组获胜</th>
							<th style="">小组平局</th>
							<th style="">小组失利</th>
							<th style="">小组积分</th>
							<th style="">总进球</th>
							<th style="">总失球</th>
							<th style="">总获胜</th>
							<th style="">总失利</th>
							<th style="">赛事排名</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>

	</body>

</html>