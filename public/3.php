<?php

include "../p.php";


/**
任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。
定义为抽象的类不能被实例化只能被继承使用。
被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
继承一个抽象类的时候，子类必须定义完父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。
例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。
 *
 * 此外子类方法可以包含父类抽象方法中不存在的可选参数。
 * 例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则也是可以正常运行的。
 */

//定义一个抽象类
abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    // 抽象方法可定义需要的参数
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

//继承抽象类
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}
//再次继承抽象类
class ConcreteClass2 extends AbstractClass
{

    public function getValue() {
        return "ConcreteClass2";
    }
    // 我们的子类可以定义父类签名中不存在的可选参数
    public function prefixValue($prefix, $separator = ".可选参数") {
        return "{$prefix}ConcreteClass2" .$separator;
    }
    public function create()
    {
        return 'create';
    }
}


$obj2 = new ConcreteClass2;
$obj2->printOut();
echo $obj2->prefixValue('FOO_') . PHP_EOL;
echo $obj2->create();