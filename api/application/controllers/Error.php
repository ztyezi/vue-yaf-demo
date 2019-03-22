<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author homework
 */
class ErrorController extends Yaf_Controller_Abstract {

  public function errorAction($exception) {
    //构造返回
    header(
        'Content-Type:application/json;charset=utf-8'
    );
    $result = array(
        'errno' => $exception->getCode(),
        'status' => 'fail',
        'errmsg' => $exception->getMessage(),
        'data' => array()
    );

    $this->getResponse()->setBody(json_encode($result));

    return FALSE;
	}
}
