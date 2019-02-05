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
class Site
{
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par)
    {
         $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL; //换行
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}
$obj = new Site();
$obj->setUrl('www.baidu.com');
$obj->getUrl();
dd($obj->url);

?>