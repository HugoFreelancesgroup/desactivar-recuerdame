<?php

// Incluye el Plugin Update Checker
require_once plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/HugoFreelancesgroup/desactivar-recuerdame/',
    __FILE__,
    'desactivar-recuerdame'
);

// Si el repositorio no usa releases, activa branch master
$myUpdateChecker->setBranch('main');

/**
 * Plugin Name: Desactivar Recuerdame
 * Plugin URI: https://freelancesgroup.com/
 * Description: Este plugin desactiva la casilla "Recuérdame" en el formulario de login de WordPress.
 * Version: 1.0.0
 * Author: Freelances Group
 * Author URI: https://freelancesgroup.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: desactivar-recuerdame
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Evita acceso directo
}

/**
 * Oculta la casilla "Recuérdame" en el login de WordPress.
 */
function fg_remove_remember_me_checkbox() {
    echo '<style>.forgetmenot { display: none; }</style>';
}
add_action( 'login_enqueue_scripts', 'fg_remove_remember_me_checkbox' );
