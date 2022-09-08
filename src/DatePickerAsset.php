<?php
/**
 * @copyright Copyright (c) 2022 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace karatae99\datepicker;

use yii\web\AssetBundle;

/**
 * DatePickerAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DatePickerAsset extends AssetBundle
{   
    public $sourcePath = __DIR__ . '/assets';
 
    public $css = [
        'css/bootstrap-datepicker4.css',
    ];

    public $js = [
        'js/bootstrap-datepicker.js'
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset'
    ];    
}
