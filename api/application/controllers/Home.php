<?php
/**
 * @name IndexController
 * @author homework
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class HomeController extends Yaf_Controller_Abstract {
  public function loginAction() {
    //1. 获取参数
    $params = $this->getRequest()->getQuery();

    //2. 业务处理
    $model = new SampleModel();

    $data = $model->selectSample();

    //3. 构造返回
    header(
        'Content-Type:application/json;charset=utf-8'
    );
    $result = array(
        'errno' => 0,
        'status' => 'ok',
        'errmsg' => '登陆成功',
        'data' => $data
    );

    $this->getResponse()->setBody(json_encode($result));

    //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
    return FALSE;
  }

  public function logoutAction() {
    //1. 获取参数
    $params = $this->getRequest()->getQuery();

    //2. 业务处理
    $model = new SampleModel();

    $data = $model->selectSample();

    //3. 构造返回
    header(
        'Content-Type:application/json;charset=utf-8'
    );
    $result = array(
        'errno' => 0,
        'status' => 'ok',
        'errmsg' => '退出成功',
        'data' => $data
    );

    $this->getResponse()->setBody(json_encode($result));

    //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
    return FALSE;
  }
}
