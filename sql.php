<?php
$con = new PDO("mysql:host=sitedb.mysqldb.chinacloudapi.cn; dbname=sitedemo", "sitedb%owner", "r00t@DBadmin");
$con->exec("create table `users` (`uid` mediumint(8) unsigned not null auto_increment, `username` char(15) not null default '', `password` char(32) not null default '', `email` varchar(40) not null default '', primary key (`uid`)) engine=MyISAM default charset=utf8 AUTO_INCREMENT=1;");
$con = null;
?>