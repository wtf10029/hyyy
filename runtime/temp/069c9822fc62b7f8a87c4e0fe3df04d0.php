<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\Pub\login.html";i:1486200125;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<title>后台登录</title>
<link href="__PUBLIC__/login/css/login.css" type="text/css" rel="stylesheet">
</head>
<body>

    <div class="login">
        <div class="message">拾禾网络-管理登录</div>
        <div id="darkbannerwrap"></div>

        <form method="post" action="<?php echo url('Pub/logindo'); ?>">
            <input id="name" name="name" placeholder="用户名" required="" type="text">
            <hr class="hr15">
            <input name="password" placeholder="密码" required="" type="password">
            <hr class="hr15">
            <input value="登录" style="width:100%;" type="submit">
            <hr class="hr20">
        </form>

    </div>

</body>
<script type="text/javascript">
    document.getElementById("name").focus();
</script>
</html>