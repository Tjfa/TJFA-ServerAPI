var oTable;

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
        "aLengthMenu": [ [10,50,100,-1], [10,50,100,"所有"] ],	
        "bPaginate": true,

    });

	$.ajax({
		url: '/TJFA/allTeam.php',
		type: 'GET',
		dataType: 'json',
		data: {},
		success:function(data){

			$.each(data, function(index, val) {

				var rank=getRank(val.rank);
				oTable.fnAddData([val.teamId,val.name,val.competitionId,val.groupNo,val.groupGoalCount,val.groupMissCount,val.groupWinCount,val.groupDrawCount,val.groupLostCount,val.score,val.goalCount,val.missCount,val.winCount,val.lostCount,rank]);
			});

		}
	});	
});

function getRank(rank)
{
	if (rank=="0") return "小组赛";
	if (rank=="1") return "冠军";
	if (rank=="2") return "亚军";
	if (rank=="3") return "季军";
	if (rank=="4") return "四强";
	if (rank=="8") return "八强";
	if (rank=="16") return "十六强";
	if (rank=="32") return "三十二强";
	if (rank=="100") return "附加赛";
}
