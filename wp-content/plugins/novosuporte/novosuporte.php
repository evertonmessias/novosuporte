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

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/novosuporte/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/novosuporte/includes/postmeta-post.php';


// OBJECTS *************************************************
$alunos = new Alunos();
//$historicoalunos = new historicoalunos();

register_activation_hook(__FILE__, array(    
    $alunos, 'activate',   
    //$historicoalunos, 'activate',
));

register_deactivation_hook(__FILE__, array(
    $alunos, 'deactivate', 
    //$historicoalunos, 'deactivate',    
));
