<?php

/*
Plugin Name: 	Transients Plugin
Description:  Testing deployment of WordPress Plugins with Transient
Version:      0.0.1
Author:       Filipe Nascimento
Author URI:   http://resultadosdigitais.com.br
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Integração RD Station is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
Integração RD Station is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with Integração RD Station. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

include_once( plugin_dir_path( __FILE__ ) . 'updater.php');

$updater = new Plugin_Updater( __FILE__ );
$updater->set_username( 'filipenasc' );
$updater->set_repository( 'transients-plugin' );
$updater->initialize();