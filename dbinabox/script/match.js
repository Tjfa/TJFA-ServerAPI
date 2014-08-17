
var oTable;

var teams;

const nonstartStr="未开始";
const doneStr="已结束";

const firstTerm="上学期";
const secondTerm="下学期";

$(document).ready(function(){

	oTable=$('#competitionTable').dataTable({
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page",
            "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",
            "sEmptyTable": "加载中。。。",
            "sInfoFiltered": "数据表中共为 _MAX_ 条记录",
            "sSearch":"搜索:",
        },

        "bPaginate": true,

    });

	$.ajax({
		url: '/TJFA/allMatch.php',
		type: 'GET',
		dataType: 'json',
		data: {},
		success:function(data){

			teams=data.teams;

			$.each(data.matches, function(index, val) {

				var property=getMatchProperty(val.matchProperty);
				
				var time=val.date;

				var isStart;
				if (val.isStart==0){
					isStart=nonstartStr;
				} else isStart=doneStr;

				
				var teamA=getTeamNameById(val.teamAId);
				var teamB=getTeamNameById(val.teamBId);
				var detail="<a class='btn btn-info' href='competitionDetail.php'>赛事信息</a>"
				var edit="<a class='edit btn btn-primary'>编辑</a>";
				var deleteItem="<a class='delete btn btn-danger'>删除</a>";

				oTable.fnAddData([val.matchId,val.competitionId,property,time,isStart,teamA.name,teamB.name,val.scoreA,val.scoreB,val.penaltyA,val.penaltyB]);
			});

			oTable.find("a.edit").click(function(event) {
				$obj=$(this).parent().parent();
				showEdit($obj);
			});

			oTable.find("a.delete").click(function(event) {
				console.log($(this).parent().parent());
			});
		}
	});	
});

function getMatchProperty(property)
{
	if (property=="0") return "小组赛";
	if (property=="1") return "决赛";
	if (property=="2") return "半决赛";
	if (property=="3") return "三四名";
	if (property=="4") return "1/4决赛";
	if (property=="8") return "1/8决赛";
	if (property=="16") return "1/16决赛";
	if (property=="100") return "附加赛";
}

function getTeamNameById(teamId)
{
	for (var i=0; i<teams.length; i++)
	{
		var team=teams[i];
		if (team.teamId==teamId){
			return team;
		}
	}
}


