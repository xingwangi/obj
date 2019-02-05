<?php
//判断 dd 函数是否存在  如果不存在
if (!function_exists('dd')) {
//    定义p函数
    function dd($var)
    {
        echo '<pre style="background: #cccccc;padding: 10px;border-radius: 10px;">';
        if (is_null($var) || is_bool($var)) {
            var_dump($var);
        } else {
            print_r($var);
        }
        echo '</pre>';
        die;
    }
}

//创建有个类
class Site
{
//    成员变量
      var $url;
      var $title;

//      成员函数
    function setUrl($url)
    {
        $this->url = $url;
    }
    function getUrl()
    {
        echo $this->url;
    }


}

$obj = new  Site();
$obj->setUrl('www.baidu.cn');

$obj->getUrl();
?>