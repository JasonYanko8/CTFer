<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户登录</title>
<link href=./css/login.css rel="stylesheet"/>
</head>

<body background="./picture/blackground.png" style="background-size: 100% 100%;background-attachment: fixed;">
<div class="box2">
    <h1 center>Welcome to 有钱乎？</h1>
</div>



<div class=box>
    
	<div class=title>用户登录</div>
	<form action="." method="post">
		<table class=login>
			<tr><th>用户名：</th><td><input type="text" name="username"/></td></tr>
			<tr><th>密码：</th><td><input type="password" name="password"/></td></tr>
			<tr><th></th><td><input type="submit" value="登录"/></td>
						
			</tr>
			
		</table>
	
	</form>
</div>
</body>
</html>
<?php
require("nonnet_mysql.php");

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT user_id, username, password FROM users where username ='$user' and password='$pass'";
$result = $conn->query($sql);

$flag=0;

if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
while($row = mysqli_fetch_row($result)) {
    echo "id: " . $row["user_id"]. " - name: " . $row["username:"]. " password:" . $row["password"]. "\n";
    $password = $row["password"];
    echo "$password\n";
}
if($result->num_rows > 0)
{
    echo "<script>alert('登录成功，跳转到后台页面');location='./login_success.html'</script>";
    echo "登录成功";
}
else
{
    echo "登录失败";
}


