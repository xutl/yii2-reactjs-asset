<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\reactjs;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/reactjs/assets';

    /**
     * @inherit
     */
    public $js = [
        'js/react.min.js',
		'js/react-dom.min.js',
    ];
}