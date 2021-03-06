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

		  <script src="script/competition.js"></script>

	</head>


	<body>

		<!-- header -->
		<?php include_once('navigation.php') ?>

		<div class="container">

			<div class="container">
				<a href="javascript:showEdit()" role="button" class="btn btn-primary"  style="float:right">新建赛事</a>
			</div>

			<div class="container" style="margin-top:20px">
				<table class="table table-striped table-bordered table-hover datatable dataTable" id="competitionTable" >
					<thead>
						<tr>
							<th style="width:13%">CompetitionId</th>
							<th style="width:10%;">名称</th>
							<th style="width:10%">No</th>
							<th style="width:10%">状态</th>
							<th style="width:13%">时间</th>
							<th style="width:10%">类型</th>
							<th style="width:13%">赛事信息</th>
							<th style="width:10%">编辑</th>
							<th style="widht:10%">删除</th>
						</tr>
					</thead>
				</table>
			</div>

		</div>


 
		<!-- createCompetitionModal -->
		<div id="createCompetitionModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    			<h3 id="myModalLabel">新建赛事</h3>
  			</div>
  			<div class="modal-body">
    			<form class="form-horizontal">
    				<input type="text" id="competitionId" style="display:none">
  					<div class="control-group" >
    					<label class="control-label" >赛事名称</label>
    					<div class="controls">
      						<input type="text" id="competitionName">
    					</div>
  					</div>

  					<div class="control-group">
    					<label class="control-label">赛事编号</label>
    					<div class="controls">
      						<input type="text" id="competitionNo">
    					</div>
  					</div>

  					<div class="control-group">
    					<label class="control-label" >赛事年份</label>
    					<div class="controls">
      						<input type="text" id="competitionTimeYear">
    					</div>
  					</div>

  					<div class="control-group">
    					<label class="control-label" >学期选择</label>
    					<div class="controls">
      						<select class="input-small" id="competitionTimeTerm">
  								<option>上学期</option>
  								<option>下学期</option>
  							</select>
    					</div>
  					</div>
  		

  					<div class="control-group">
    					<label class="control-label" >赛事状态</label>
    					<div class="controls">
      						<select class="input-small" id="competitionState">
  								<option>未开始</option>
  								<option>进行中</option>
  								<option>已经结束</option>
  							</select>
    					</div>
  					</div>  		

  					<div class="control-group">
  						<div class="controls">
  							<div id="competitionType">
  								<input type="radio" name="competitionType"  id="competitionBenbu" value="0" checked> 本部
  								<input type="radio" name="competitionType" id="competitionJiading" value="1" > 嘉定
  							</div>
						</div>
  					</div>


				</form>
  			</div>
  			<div class="modal-footer">
  				<button class="btn btn-primary">新建</button>
    			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
  			</div>
		</div>
	</body>

</html>