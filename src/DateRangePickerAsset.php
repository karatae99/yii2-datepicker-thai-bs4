<?php
/**
 * @copyright Copyright (c) 2022 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace karatae99\datepicker;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DateRangePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/karatae99/yii2-datepicker-thai-bs4/src/assets';

    public $css = [
        'css/bootstrap-daterangepicker.css'
    ];

    public $depends = [
        'karatae99\datepicker\DatePickerAsset'
    ];

}
