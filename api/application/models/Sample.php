<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author homework
 */
class SampleModel {
    public function __construct() {
    }   
    
    public function selectSample() {
        return array(
          "key1" => 1,
          "key2" => 2
        );
    }

    public function insertSample($arrInfo) {
        return true;
    }
}
