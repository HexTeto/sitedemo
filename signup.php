<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <title>支付页</title>
    </head>
    <body>
        <span>
        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $con = new PDO("mysql:host=sitedb.mysqldb.chinacloudapi.cn; dbname=sitedemo", "sitedb%owner", "r00t@DBadmin");
        $stmt = $con->prepare("insert into users (username, password, email) values (:username, :password, :email)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $con = null;
        ?>
        </span>
        <h4>请扫描下方二维码完成支付</h4>
        <br/>
        <img src="images/qrcode.png" alt="QRCode">
        <br/>
        <a href="index.html#footer">支付遇到问题?</a>
    </body> 
</html>