<?php


// 执行 SQL 查询

$query = 'SELECT * FROM t_grade WHERE 学号=xxx';

$result = mysqli_query($query) or die('Query failed: ' . mysqli_error());


// 用 HTML 显示结果

echo  $result;

?>
