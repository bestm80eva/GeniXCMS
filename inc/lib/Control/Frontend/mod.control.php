<?php

defined('GX_LIB') or die('Direct Access Not Allowed!');
/*
 * GeniXCMS - Content Management System
 *
 * PHP Based Content Management System and Framework
 *
 * @since 0.0.1 build date 20140805
 *
 * @version 1.0.0
 *
 * @link https://github.com/semplon/GeniXCMS
 * @link http://genixcms.org
 *
 * @author Puguh Wijayanto <psw@metalgenix.com>
 * @copyright 2014-2016 Puguh Wijayanto
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

$data = Router::scrap($param);
$data['mod'] = Typo::cleanX($data['mod']);
$data['p_type'] = 'mod';

if (Hooks::exist($data['mod'], 'mod_control')) {
    Theme::theme('header', $data);
    Theme::theme('mod', $data);
    Theme::footer();
    exit();
} else {
    Control::error('404');
    exit();
}

/* End of file mod.control.php */
/* Location: ./inc/lib/Control/Frontend/mod.control.php */
