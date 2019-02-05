<?php

include "../p.php";


//Final 关键字

//如果父类中的方法被声明为 final，则子类无法覆盖该方法。


class BaseClass {
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}

class ChildClass extends BaseClass {
    //子类无法覆盖该方法
    public function moreTesting() {
        echo "ChildClass::moreTesting() called"  . PHP_EOL;
    }
}

//如果一个类被声明为 final，则不能被继承。
final class UserClass{
    public function index()
    {
        return 1;
    }
}

//不能被继承
class ArticleClass extends UserClass{
    public function __construct()
    {
        return 'file';
    }
}