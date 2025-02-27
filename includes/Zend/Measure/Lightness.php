<?php
/**
 * Zend Framework Modified for PHP-Nuke Titanium
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category  Zend
 * @package   Zend_Measure
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd     New BSD License
 * @version   $Id$
 */

/**
 * Implement needed classes
 */
require_once NUKE_ZEND_DIR.'Measure/Abstract.php';
require_once NUKE_ZEND_DIR.'Locale.php';

/**
 * Class for handling temperature conversions
 *
 * @category   Zend for PHP-Nuke Titanium
 * @package    Zend_Measure
 * @subpackage Zend_Measure_Lightness
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Measure_Lightness extends Zend_Measure_Abstract
{
    const STANDARD = 'CANDELA_PER_SQUARE_METER';

    const APOSTILB                          = 'APOSTILB';
    const BLONDEL                           = 'BLONDEL';
    const CANDELA_PER_SQUARE_CENTIMETER     = 'CANDELA_PER_SQUARE_CENTIMETER';
    const CANDELA_PER_SQUARE_FOOT           = 'CANDELA_PER_SQUARE_FOOT';
    const CANDELA_PER_SQUARE_INCH           = 'CANDELA_PER_SQUARE_INCH';
    const CANDELA_PER_SQUARE_METER          = 'CANDELA_PER_SQUARE_METER';
    const FOOTLAMBERT                       = 'FOOTLAMBERT';
    const KILOCANDELA_PER_SQUARE_CENTIMETER = 'KILOCANDELA_PER_SQUARE_CENTIMETER';
    const KILOCANDELA_PER_SQUARE_FOOT       = 'KILOCANDELA_PER_SQUARE_FOOT';
    const KILOCANDELA_PER_SQUARE_INCH       = 'KILOCANDELA_PER_SQUARE_INCH';
    const KILOCANDELA_PER_SQUARE_METER      = 'KILOCANDELA_PER_SQUARE_METER';
    const LAMBERT                           = 'LAMBERT';
    const MILLILAMBERT                      = 'MILLILAMBERT';
    const NIT                               = 'NIT';
    const STILB                             = 'STILB';

    /**
     * Calculations for all lightness units
     *
     * @var array
     */
    protected $_units = [
        'APOSTILB'                      => ['0.31830989',   'asb'],
        'BLONDEL'                       => ['0.31830989',   'blondel'],
        'CANDELA_PER_SQUARE_CENTIMETER' => ['10000',        'cd/cm²'],
        'CANDELA_PER_SQUARE_FOOT'       => ['10.76391',     'cd/ft²'],
        'CANDELA_PER_SQUARE_INCH'       => ['1550.00304',   'cd/in²'],
        'CANDELA_PER_SQUARE_METER'      => ['1',            'cd/m²'],
        'FOOTLAMBERT'                   => ['3.4262591',    'ftL'],
        'KILOCANDELA_PER_SQUARE_CENTIMETER' => ['10000000', 'kcd/cm²'],
        'KILOCANDELA_PER_SQUARE_FOOT'   => ['10763.91',     'kcd/ft²'],
        'KILOCANDELA_PER_SQUARE_INCH'   => ['1550003.04',   'kcd/in²'],
        'KILOCANDELA_PER_SQUARE_METER'  => ['1000',         'kcd/m²'],
        'LAMBERT'                       => ['3183.0989',    'L'],
        'MILLILAMBERT'                  => ['3.1830989',    'mL'],
        'NIT'                           => ['1',            'nt'],
        'STILB'                         => ['10000',        'sb'],
        'STANDARD'                      => 'CANDELA_PER_SQUARE_METER'
    ];
}
