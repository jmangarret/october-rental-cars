<?php 
class Cms5f5d1181f0f29604335058_1ddf79710b587f41870d04f1b5842950Class extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = input('value1');
    $value2 = input('value2');
    $operation = input('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value1 / $value2;
            break;
    }
}
}
