/*页面 全屏-添加*/
function o2o_edit(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}

/*添加或者编辑缩小的屏幕*/
function o2o_s_edit(title,url,w,h){
    layer_show(title,url,w,h);
}
/*-删除*/
function o2o_del(url){

    layer.confirm('确认要删除吗？',function(index){
        window.location.href=url;
    });
}
var oldlistorder=0;
var listorder=0;
$(".listorder input").focus(function () {
    oldlistorder = $(this).val();
});
// 排序:抛送ajax
$(".listorder input").blur(function() {
    // 编写抛送逻辑
    // 获取主键id
    var id = $(this).attr("attr-id");
    // 获取排序的值
    listorder = $(this).val();

    // 组装数据
    var postData = {
        'id' : id,
        'listorder' : listorder,
    };
    // 准备抛送url
    var url = SCOPE.listorder_url;

    if(listorder < 1)
    {
        alert("排序不能小于1");
        $(this).val(oldlistorder);
        return;
    }
    if(listorder != oldlistorder)
    {
// 排序值!=原排序值则发送ajax请求,没有修改排序值,不更新.
        $.post(url, postData, function (result) {
            // 回调处理
            // 成功 返回的状态码==1
            if(result.code == 1)
            {
                // 跳转
                alert(result.msg);
                location.href = result.data;
            }
            // 失败 返回的状态码==0
            else
            {
                alert(result.msg);
            }
        },'json');
    }
});
