<?php

namespace app\components;

use yii\base\Component;

class TestComponent extends Component
{
    public function __construct($config = [])
    {
        echo '<pre>';
        var_dump('11111');
        echo '</pre>';
        parent::__construct($config);
    }
}