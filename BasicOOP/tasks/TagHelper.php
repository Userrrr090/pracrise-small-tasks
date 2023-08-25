<?php

class TagHelper
{
    public function open ($name, $aAttr = [])
    {
        $attrsStr = $this->getAttrStr($aAttr);
        return "<$name$attrsStr>";
    }

    public function close ($name)
    {
        return "</$name>";
    }

    private function getAttrStr ($aAttr)
    {
        if(!empty($aAttr))
        {
            $attrStr = '';
            foreach ($aAttr as $name => $value) {
                if($value === true)
                {
                    $attrStr .= " $name";
                } else {
                    $attrStr .= " $name=\"$value\"";
                }
            }
            return $attrStr;
        } else {
            return '';
        }
    }

    public function show ($name, $text = '', $aAttr = [])
    {
        return $this->open ($name, $aAttr) . $text . $this->close($name);
    }
}

class FormHelper extends TagHelper
{
    public function openForm ($attrs = [])
    {
        return parent::open('form', $attrs);
    }

    public function closeForm ()
    {
        return parent::close('form');
    }

    public function input ($attr)
    {
        if(isset($attr['name']))
        {
            $inputName = $attr['name'];

            if(isset($_REQUEST[$inputName]))
            {
                $inputValue = $_REQUEST[$inputName];

                $attr['value'] = $inputValue;
            }
        }
        return parent::open('input', $attr);
    }

    public function password ($attr)
    {
        $attr['type'] = 'password';
        return $this->input($attr);
    }

    public function submit ($attr = [])
    {
        $attr['type'] = 'submit';
        return $this->input($attr);
    }

    public function checkbox ($attr = [])
    {
        $attr['type'] = 'checkbox';

        if(isset($attr['name']))
        {
            $inputName = $attr['name'];

            if(isset($_REQUEST[$inputName]) && $_REQUEST[$inputName] == $attr['value'])
            {
                $attr['checked'] = true;
            }
        }

        return parent::open('input', $attr);
    }

    public function radio ($attr = [])
    {
        $attr['type'] = 'radio';

        if(isset($attr['name']))
        {
            $inputName = $attr['name'];

            if(isset($_REQUEST[$inputName]) && $_REQUEST[$inputName] == $attr['value'])
            {
                $attr['checked'] = true;
            }
        }

        return parent::open('input', $attr);
    }

    public function textarea ($attr = [])
    {
        $text = '';

        if(isset($attr['name']))
        {
            $inputName = $attr['name'];

            if(isset($_REQUEST[$inputName]))
            {
                $text = $_REQUEST[$inputName];
            }
        }

        return parent::open('textarea', $attr) . $text . parent::close('textarea');
    }

}

$fh = new FormHelper();

echo $fh->openForm(['action' => '', 'method' => 'GET']);
echo $fh->input(['name' => 'email']);
echo '<br>';
echo '<br>';
echo $fh->password(['name' => 'password']);
echo '<br>';
echo '<br>';
echo $fh->textarea(['name' => 'text']);
echo '<br>';
echo '<br>';
echo $fh->radio(['name' => 'val1', 'value' => '1']);
echo $fh->radio(['name' => 'val1', 'value' => '2']);
echo $fh->radio(['name' => 'val1', 'value' => '3']);
echo '<br>';
echo '<br>';
echo $fh->submit();
echo $fh->closeForm();
