<html>

<head>
    <meta charset="UTF-8">
    <title>我觉得这道题甚至可以当签到题但是他们不同意</title>
</head>

<body>
<h1>试试简单的绕过咯</h1>
<!-- 何不试试sqlmap，记得加tamper哦 -->
<form method="get">
    显而易见注入点就在这里: <input type="text" name="act" value="">
    <input type="submit">
</form>

<pre>
<?php
if(isset($_GET['act'])) {
    $id = $_GET['act'];
    $id = str_replace(" ","[o.O?]", $id);
    $db=mysql_connect("127.0.0.1","root","root");
    if(!$db){
      die('数据库连接失败'.$mysql_error());
    }
    mysql_select_db("lookhere",$db);
    $sql="SELECT * FROM words WHERE id='$id'";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
    echo "当前sql语句为:".$sql;
    echo "<br>";
    if($row)
    {
      echo "<font size='5'>";
      echo '你的id为:'. $row['id'];
      echo "<br>";
      echo '当前id数据为:' .$row['data'];
      echo "</font>";
      }
    else 
    {
    echo '<font>';
    print_r(mysql_error());
    echo "</font>";  
    }
  }
    else { echo "";}

?>
</pre>

</body>

</html>
