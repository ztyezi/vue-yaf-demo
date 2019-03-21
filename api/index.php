<?php

define('APPLICATION_PATH', '/home/homework/zhangtao/vue-yaf-demo/api');
$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");
$application->bootstrap()->run();
?>
