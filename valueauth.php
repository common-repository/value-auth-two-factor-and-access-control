<?php
/**
 * @package valueauth
 */
/*
Plugin Name: Value-Auth Two Factor and Access Control 
Plugin URI: https://www.value-domain.com/value-auth/
Description: メールやSMSを利用した２段階認証や、IP制限等によるアクセス制御を導入するためのプラグインです。
Version: 2.0.5
Author: Value-Domain
Author URI: https://www.value-domain.com
License: GPLv2 or later
Text Domain:
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 GMO DigiRock, Inc.
*/

require( __DIR__ . '/vendor/autoload.php' );
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'lib/ValueAuthAdapter.php';
register_activation_hook( __FILE__, [ ValueAuthAdapter::class, 'install' ] );
register_uninstall_hook( __FILE__, [ ValueAuthAdapter::class, 'uninstall' ] );
$va = new ValueAuthAdapter();

?>