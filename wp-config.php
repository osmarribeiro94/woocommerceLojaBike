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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Configurações do FTP - Você pode pegar estas informações com o serviço de hospedagem ** //
define( 'FS_METHOD', 'direct' );

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lojabike' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']gFn/1+SLo:u?0Q/A`6ykT_#Vb)BNL[]tT)WCS( J+G%ZYW?kzd>QA);IU5nJQ^{' );
define( 'SECURE_AUTH_KEY',  'z5H-^1Y{DFWNs;yokFV);8yli a)2zOhBpz<tz?d4Y{<]!$tk([q7LxRFFq|j;J(' );
define( 'LOGGED_IN_KEY',    'C@od+GS/.8+W[<KvK42%96}}8^ZYfyUFI~Z-)%B3 B=&jh@3-AX%*#^5+dS+$P_7' );
define( 'NONCE_KEY',        '^j:~CPDVoybTe58c$]b:G2GW~:ENz.BpZXL+#!-Mh@@t3. ?Wf.dOqBt3{YY_%rM' );
define( 'AUTH_SALT',        '+cLooQE9On/<=3Z?oE{7RwH`}aHZ=mrw)LV.!(e2;1WyR(=&e&3AuCSI:iMSE<{R' );
define( 'SECURE_AUTH_SALT', '..IS3QF|mv}DY}vHTB2/<vd,)Ttu<EL|QLigjDb4a*o)0.}kRt5,|zjI0Uu EBv5' );
define( 'LOGGED_IN_SALT',   'p2Se0-?{c]?;(_-cF9X1deyR=Irj>`DjSM%!$UE~7_m:z3NC6svd-r|S m6:(b8>' );
define( 'NONCE_SALT',       'LBTrWX=!1`_H`tK{nKzyhOLi!qsop.ko#l N?f*57Hg!-qmIn?4BR*_XfkVl9H3~' );

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
