<?php

interface iTag
{
    // Геттер имени:
    public function getName();

    // Геттер текста:
    public function getText();

    // Геттер всех атрибутов:
    public function getAttrs();

    // Геттер одного атрибута по имени:
    public function getAttr($name);

    // Открывающий тег, текст и закрывающий тег:
    public function show();

    // Открывающий тег:
    public function open();

    // Закрывающий тег:
    public function close();

    // Установка текста:
    public function setText($text);

    // Установка атрибута:
    public function setAttr($name, $value = true);

    // Установка атрибутов:
    public function setAttrs($attrs);

    // Удаление атрибута:
    public function removeAttr($name);

    // Установка класса:
    public function addClass($className);

    // Удаление класса:
    public function removeClass($className);
}

class Tag implements iTag
{
    private string $name;
    private array $attr = [];
    private string $text = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAttrs(): array
    {
        return $this->attr;
    }

    public function getAttr($name)
    {
        return $this->attr[$name] ?? NULL;
    }

    public function show ()
    {
        return $this->open() . $this->text . $this->close();
    }

    public function open ()
    {
        $name = $this->name;
        $attrStr = $this->getAttrStr($this->attr);
        return "<$name$attrStr>";
    }

    public function close ()
    {
        $name = $this->name;
        return "</$name>";
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setAttr($name, $value = true)
    {
        $this->attr[$name] = $value;
        return $this;
    }

    public function setAttrs ($aAttrs)
    {
        foreach ($aAttrs as $name => $value) {
            $this->setAttr($name, $value);
        }
        return $this;
    }

    public function removeAttr ($name)
    {
        unset($this->attr[$name]);
        return $this;
    }

    public function addClass ($className) {
        if(isset($this->attr['class']))
        {
            $classNames = explode(' ', $this->attr['class']);
            if(!in_array($className, $classNames))
            {
                $classNames[] = $className;
                $this->attr['class'] = implode(' ', $classNames);
            }
        } else {
            $this->attr['class'] = $className;
        }

        return $this;
    }

    public function removeClass ($className)
    {
        if(isset($this->attr['class']))
        {
            $classNames = explode(' ', $this->attr['class']);
            if(in_array($className, $classNames))
            {
                $classNames = $this->removeElem($className, $classNames);
                $this->attr['class'] = implode(' ', $classNames);
            }
        }

        return $this;
    }

    protected function getAttrStr ($attr)
    {

        if(!empty($attr))
        {
            $result = '';

            foreach ($attr as $key => $value) {
                if($value === true)
                {
                    $result .= " $key";
                } else {
                    $result .= " $key=\"$value\"";
                }
            }

            return $result;
        } else {
            return ' ';
        }
    }

    private function removeElem ($elem, $arr)
    {
        $key = array_search($elem, $arr);
        array_slice($arr, $key, 1);

        return $arr;
    }
}

$label = new Tag('label');
echo $label->setAttr('for', 'email')->open() . 'Email: ' . $label->close();
$input1 = new Tag('input');
echo $input1->setAttr('id', 'email')->setAttr('disabled', true)->addClass('inputClass ClassClass')->addClass('newClass anotherClass')->removeClass('anotherClass')->open();

echo PHP_EOL;

$header = new Tag('h3');
$div = new Tag('div');

echo $div->open() . $header->open() . 'Site header' . $header->close() . $div->close();

$img = new Tag('img');
echo $img->setAttr('src', '\virus.png')->open();

$img1 = new Tag('img');
echo $img1->setAttr('src', '\virus.png')->removeAttr('src')->open();

$img2 = new Tag('img');
echo $img2->setAttrs([ 'src' => '123.png' , 'width' => '200'])->open();

echo PHP_EOL;

echo $div->open();
echo (new Tag('input'))->setAttr('name', 'name1')->open();
echo (new Tag('input'))->setAttrs(['name' => 'name2'])->addClass('inputClass')->open();
echo $div->close();


class Image extends Tag
{
    public function __construct()
    {
        $this->setAttr('src', '');
        $this->setAttr('alt', '');

        parent::__construct('img');
    }
    public function __toString(): string
    {
        return parent::open();
    }
}

$image = new Image();
$image->setAttr('src', '234.png')->setAttr('alt', 'Picture')->setAttrs(['width' => 200, 'height' => 300]);

echo $image;


class Link extends Tag
{
    const pageStatus = 'active';

    public function __construct()
    {
        $this->setAttr('href', '');
        $this->setText('Link');

        parent::__construct('a');
    }

    public function __toString(): string
    {
        return parent::show();
    }

    public function open ()
    {
        $this->activateSelf();
        return parent::open();
    }

    private function activateSelf ()
    {
        if($this->getAttr('href') === $_SERVER['REQUEST_URI'])
        {
            $this->addClass(self::pageStatus);
        }
    }
}

class ListItem extends Tag
{
    public function __construct()
    {
        parent::__construct('li');
    }
}

class HtmlList extends Tag
{
    private array $items = [];

    public function addItem (ListItem $item) {
        $this->items[] = $item;
        return $this;
    }

    public function show ()
    {
        $result = $this->open();

        foreach ($this->items as $item)
        {
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }

    public function __toString(): string
    {
        return $this->show();
    }

}

class OL extends HtmlList
{
    public function __construct()
    {
        parent::__construct('ol');
    }
}

class UL extends HtmlList
{
    public function __construct()
    {
        parent::__construct('ul');
    }
}

$uList = new UL();

echo $uList
    ->addItem((new ListItem())->setText('Unordered item')->setAttr('class', 'first') )
    ->addItem((new ListItem())->setText('Unordered item'))
    ->addItem((new ListItem())->setText('Unordered item'));

$oList = new OL();

echo $oList
    ->addItem( (new ListItem())->setText('Ordered item 1') )
    ->addItem( (new ListItem())->setText('Ordered item 2') )
    ->addItem( (new ListItem())->setText('Ordered item 3') );

class Form extends Tag
{
    public function __construct()
    {
        $this->setAttr('action', 'test.php')->setAttr('method', 'POST');

        parent::__construct('form');
    }
}


class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    public function open ()
    {
        $inputName = $this->getAttr('name');

        if($inputName)
        {
            if(isset($_REQUEST[$inputName]))
            {
                $value = $_REQUEST[$inputName];
                $this->setAttr('value', $value);
            }
        }

        return parent::open();
    }

    public function __toString(): string
    {
        return $this->open();
    }
}

class Submit extends Input
{
    public function __construct()
    {
        $this->setAttr('type', 'submit');

        parent::__construct();
    }
}

class Password extends Input
{
    public function __construct () {
        $this->setAttr('type', 'password');

        parent::__construct('input');
    }
}

class Hidden extends Input
{
    public function __construct()
    {
        $this->setAttr('type', 'hidden');

        parent::__construct();
    }
}

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }

    public function open()
    {
        $inputName = $this->getAttr('name');

        if($inputName)
        {
            if(isset($_REQUEST[$inputName]))
            {
                $this->setText($_REQUEST[$inputName]);
            }
        }
        return parent::open();
    }
}

class Checkbox extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'checkbox');
        $this->setAttr('value', '1');

        parent::__construct('input');
    }

    public function open()
    {
        $name = $this->getAttr('name');

        if($name)
        {
            /*$hidden = (new Hidden())
                ->setAttr('name', $name)
                ->setAttr('value', '0');*/

            if(isset($_REQUEST[$name]))
            {
                $value = $_REQUEST[$name];

                if($value == 1)
                {
                    $this->setAttr('checked');
                } else {
                    $this->removeAttr('checked');
                }
            }

            return /*$hidden->open() .*/ parent::open();
        } else {

            return parent::open();
        }
    }

    public function __toString(): string
    {
        return $this->open();
    }
}

class Radio extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'radio');

        parent::__construct('input');
    }

    public function open()
    {
        $name = $this->getAttr('name');

        if($name) {
            if (isset($_REQUEST[$name]) && $_REQUEST[$name] == $this->getAttr('value')) {
                $this->setAttr('checked');
            }
        }
        return parent::open();
    }

    public function __toString(): string
    {
        return $this->open();
    }
}

class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }

    public function __toString(): string
    {
        return parent::show();
    }
}

class Select extends Tag
{
    private array $options;

    public function __construct()
    {
        parent::__construct('select');
    }

    public function addOption (Option $option)
    {
        $this->options[] = $option;
        return $this;
    }

    public function open ()
    {
        $name = $this->getAttr('name');

        if($name)
        {
            if (isset($_REQUEST[$name])) {
                foreach ($this->options as $option) {
                    if ($_REQUEST[$name] == $option->getAttr('value')) {
                        $option->setAttr('selected');
                    }
                }
            }
        }

        return parent::open();
    }

    public function show()
    {
        $result = $this->open();

        foreach ($this->options as $option) {


            $result .= $option->show();
        }

        $result .= parent::close();

        return $result;
    }
}


$form = (new Form())->setAttrs(['action' => '', 'method' => 'GET']);
$input1 = new Input();
$input2 = new Input();
$input3 = new Input();
$input4 = new Input();
$input5 = new Input();

echo $form->open();
echo $input1->setAttr('name', 'num1');
echo "<br>";

echo $input2->setAttr('name', 'num2');
echo "<br>";

echo $input3->setAttr('name', 'num3');
echo "<br>";

echo $input4->setAttr('name', 'num4');
echo "<br>";

echo $input5->setAttr('name', 'num5');
echo "<br>";

echo new Submit();
echo $form->close();

echo $input1->getAttr('value') + $input2->getAttr('value') + $input3->getAttr('value') + $input4->getAttr('value') + $input5->getAttr('value');


echo $form->open();
echo "<br>";

echo (new Hidden())->setAttr('name', 'id');
echo (new Input())->setAttr('name', 'login');

echo "<br>";
echo (new Password())->setAttr('name', 'password');
echo "<br>";

echo ((new Textarea())->setAttr('name', 'text')->show());
echo ((new Checkbox())->setAttr('name', 'checkbox'));
echo "<br>";
echo new Submit();
echo $form->close();


echo $form->open();
echo "<br>";

echo ((new Radio())->setAttr('name', 'radio')->setAttr('value', '1'));
echo ((new Radio())->setAttr('name', 'radio')->setAttr('value', '2'));
echo ((new Radio())->setAttr('name', 'radio')->setAttr('value', '3'));

echo "<br>";
echo new Submit();
echo $form->close();


echo $form->open();
echo "<br>";

echo (new Select())->setAttr('name', 'selectedItem')
    ->addOption((new Option())->setText('item 1')->setAttr('value', '1'))
    ->addOption((new Option())->setText('item 2')->setAttr('value', '2'))
    ->addOption((new Option())->setText('item 3')->setAttr('value', '3'))
    ->show();

echo "<br>";
echo new Submit();
echo $form->close();

