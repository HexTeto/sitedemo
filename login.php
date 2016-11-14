<html>
    <head>
        <meta http-equiv="refresh" content="1; url=http://www.unisvnet.com/">
    </head>
    <body>
        <?php
        $email = 'admin@unisvnet.com';
        $password = 'abc';
        /*
        $email = $_POST["email"];
        $password = $_POST["password"];
        */
        $con = new PDO("mysql:host=sitedb.mysqldb.chinacloudapi.cn; dbname=sitedemo", "sitedb%owner", "r00t@DBadmin", array(PDO::ATTR_PERSISTENT => true));
        $res = $con->query("select email, password from users where email='$email' and password='$password'");
        $check = $res->fetch();
        if ($check['email'] > '' && $check['password'] > '') {
            echo "登录成功，如果浏览器没有跳转请<a href=index.html>点击返回</a>";
        } else {
            echo "登录失败！请检查邮箱和密码 <a href=index.html>重试</a>";
        }
        ?>
    </body>
</html>