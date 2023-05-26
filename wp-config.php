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

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_wp_plugin' );

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
define( 'AUTH_KEY',         '1G6U^HWeCgqw`bNLsL!r01:6 CsC<2[f~9eyX;T0nS/>UR27kws,q;NB#I9UC>BF' );
define( 'SECURE_AUTH_KEY',  '+Q;hL*qf{9!PZunz?^R$<z9`a3x-6!5RFvV4V9}Bj*;gF;$~z:@FjST0<tnMHPn{' );
define( 'LOGGED_IN_KEY',    '$n[[>x]|T#0z{Q+>jwGXG!9p==?2^s47j(U_?[>A8Wnc:.Iy`(OCTR)y/d:ch>U1' );
define( 'NONCE_KEY',        'I)Vw;l.c%5GhhLOP,Ym|@[N>&E%W!QO<6%],Z>ieLmb,Y{6~WGl;&YRu1zD6eQgl' );
define( 'AUTH_SALT',        'KltJ43tciz^ln:+3n^wwt{CPd_<*q&NU{dLJ5o{de_m^w$>R _|6/+x|JHo<`!^(' );
define( 'SECURE_AUTH_SALT', '+/N/`8XjDKgu%KW =^Mt.kRlZVMyS]A6j3T^(:xDHLG|5oP#ebpLM8c%(9aD0 _R' );
define( 'LOGGED_IN_SALT',   'p?x~9ifhj4m]AaTw9aD^)/|o.9?/YnJhKUZ|nvpsf|:(1u#Xyg<_!Q1&{ !IZTH*' );
define( 'NONCE_SALT',       'gj<_%GIms2K0]vvR=xbId85[p+_k<4hCSa]99(&QT?$T>ojMDq1Hd!`U1H_;9f?*' );

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
