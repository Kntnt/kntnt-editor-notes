<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Editor Notes
 * Description:       Provides the shortcode [NOTE]…[/NOTE] where … can be anything visible only for editors.
 * Version:           1.0.2
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * GitHub Plugin URI: https://github.com/Kntnt/kntnt-editor-notes
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Kntnt\User_Shortcode;

defined( 'ABSPATH' ) || die;

add_shortcode( 'NOTE', function () { return ""; } );