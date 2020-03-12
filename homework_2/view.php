<?php

interface FormConstructorInterface
{
    public function render(): string;
}

class FormConstructor implements FormConstructorInterface
{

    public function __set($name, $value)
    {
        $this->fields{$name} = $value;
    }

    public function render(): string
    {

        $formHtml = '<form>';
        foreach ($this->fields as $name => $value) {
            $formHtml .= sprintf(
                '<input type="text" name="%s" value="%s"/>',
                $name,
                $value
            );
        }
        $formHtml .= '</form>';
        
        return $formHtml;
    }
}

$formConstructor = new FormConstructor();
$formConstructor->first_name = 'Your first name';
$formConstructor->last_name = 'Your last name';
$formConstructor->email = 'Email address';
$formConstructor->address = 'Street address';

echo $formConstructor->render();


//<form>
//    <input type="text" name="propertyName" value="propertyValue"/>
//    ...
//    ...
//    ...
//    <input type="text" name="propertyNameN" value="propertyValueN"/>
//
//</form>