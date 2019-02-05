<?php

include "../p.php";
// 声明一个'iTemplate'接口


/**
接口
接口是通过 （interface）关键字来定义的，其中只能定义方法不能定义属性切没有方法体。
接口中定义的所有方法都必须是公有（public），这是接口的特性。
类使用（implements）关键字 来实现接口使用的，可以一个接口或者多个接口，用逗号来分隔多个接口的名称。
类中必须定义完接口中所定义的所有方法，所有方法也必须是公有得。
*/

//定义一个接口
interface iTemplate
{
    public function setVariable($name, $var);

    public function getHtml($template);
}
//再次定义接口
interface iView{
    public function setView();
};

// 实现接口
class Template implements iTemplate,IView
{
    private $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value) {
        }
        return $template;
    }

    public function setView()
    {

    }

}

$obj = new Template();
dd($obj->getHtml('html'));
