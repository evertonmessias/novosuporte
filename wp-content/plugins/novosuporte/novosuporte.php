<?php

/**
 * Plugin Name: NovoSuporte
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin NovoSuporte
 * Author: EvM.
 * Version: 1.0
 * Text Domain: NovoSuporte
 * Plugin NovoSuporte
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/functions.php';

// TYPES ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/types/alunos.php';
include ABSPATH . '/wp-content/plugins/novosuporte/includes/types/doutorado.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/settings.php';


// ACTIVATE *************************************************
function activate()
{
    remove_role('contributor');
    remove_role('author');
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'activate');


// DEACTIVATE *************************************************
function deactivate()
{
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'deactivate');
