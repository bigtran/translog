<?php
/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    bigtran<leouzdc@qq.com>
 * @copyright bigtran<leouzdc@qq.com>
 * @link      http://www.bigtran.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */


namespace support\view;

use Webman\View;

/**
 * Class Raw
 * @package support\view
 */
class TransLogTheme implements View
{
    public static function render($template, $vars, $app = null)
    {
        
        static $view_suffix;
        $view_suffix = $view_suffix ? : config('view.view_suffix', 'php');
        $app_name = $app == null ? request()->app : $app;
        if ($app_name === '') {
            $view_path = public_path() . "/_theme/$template.$view_suffix";
        } else {
            $view_path = public_path() . "/_theme/$app_name/$template.$view_suffix";
        }
        \extract($vars);
        \ob_start();
        // Try to include php file.
        try {
            //include base_path() . '/app/functions/translog.function.php';
            include $view_path;
        } catch (\Throwable $e) {
            echo $e;
        }
        return \ob_get_clean();
    }
}