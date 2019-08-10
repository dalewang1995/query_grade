<?php
$server="localhost";//主机
$db_username="root";//数据库用户名
$db_password="";//数据库密码
$con = mysqli_connect($server,$db_username,$db_password);//链接数据库
if(!$con){
    die("can't connect".mysqli_error());//如果链接失败输出错误
}
$result = mysqli_select_db('test',$con);//选择数据库
var_dump($result);
//$query = 'SELECT * FROM t_grade WHERE 学号=xxx';
//
//$result = mysqli_query($query) or die('Query failed: ' . mysqli_error());


// 用 HTML 显示结果

//echo  $result;
?>
