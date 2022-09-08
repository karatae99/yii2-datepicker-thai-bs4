<?php
/**
 * @copyright Copyright (c) 2022 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace karatae99\datepicker;

use yii\web\AssetBundle;

/**
 * DatePickerLanguageAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DatePickerLanguageAsset extends AssetBundle
{    
    public $sourcePath = __DIR__ . '/assets/js/locales';

    public $depends = [
        'karatae99\datepicker\DateRangePickerAsset'
    ];
}
