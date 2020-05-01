<?php

namespace app\components;

use yii\web\AssetManager as BaseAssetManager;

class AssetManager extends BaseAssetManager
{
    public $appendTimestamp = true;
}