/**
 * @function 利用ajax动态交换数据(Text/HTML格式)
 * @param url   要提交请求的页面
 * @param jsonData  要提交的数据,利用Json传递
 * @param getMsg  成功后执行的函数
 */
function ajaxText(url,jsonData,getMsg)
{
    //创建Ajax对象,ActiveXObject兼容IE5,6
    var oAjax = window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
    //打开请求
    oAjax.open('POST',url,true);//方法,URL,异步传输
    //发送请求
    var data = '';
    for(var d in jsonData)   //拼装数据
        data += (d + '=' +jsonData[d]);
    oAjax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    oAjax.send(data);
    //接收返回,当服务器有东西返回时触发
    oAjax.onreadystatechange = function ()
    {
        if(oAjax.readyState == 4 && oAjax.status == 200)
        {
            if(getMsg)getMsg(oAjax.responseText);
        }
    }
}