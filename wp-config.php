<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'suporteic' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'efc;2505xx' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`G41i[ewN*@h1*u>Dz+Q/[KKF1fc*-kdLde]IOMs.6dj&5*}NIY~7a$f=i!)3kOR' );
define( 'SECURE_AUTH_KEY',  '[zZxPnn*11sm.f%KiX]G*6u*[&0^T$<qI;DSuSA1f#c{-3iK9Ms.m}M[wnvouOmO' );
define( 'LOGGED_IN_KEY',    '1#Oy7@s=vRhS8p=,)^XBt;ZEg*6mcC5z,XKr&qnJjp` ISNAOBA?61/ ?k`)>a$P' );
define( 'NONCE_KEY',        '%@(!L_D?{pMY-:c9xIIDd .>l3~K%bcNa;g{V<d}WeRQuz&7E]j#3~E;.Q,yYnUF' );
define( 'AUTH_SALT',        ',QyZr-9B,@z{r(~8R@TvyAho%x5EtI?d`(a~2A%:|W8t_O5</,dfK_q{} zj9xxC' );
define( 'SECURE_AUTH_SALT', 'gjY-M{M2Z/2eq*CWRK*Nb+7z/!6dpMYDs=3%~]),nJgkcFm_BKLrYu}@23NTe81[' );
define( 'LOGGED_IN_SALT',   'x%19y(.zkB%Yf3}FlLG_T^P+}AtNbj>ZP!hU{8|:x6sd#*=&*!:G8<#Wr5{*C-yu' );
define( 'NONCE_SALT',       'N>_6)x[L2.[Fr+o=IvI{2q.O&|pm=k9w*)j6u0?|ZkpfaD9>(R4/%XWXEOla;&p`' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
