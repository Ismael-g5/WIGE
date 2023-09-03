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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site_2' );

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
define( 'AUTH_KEY',         'Hvw1ZnZ_N=)>2N|LGQPt~CZq1X]]uh58.0O,rt[,}+,!H]WWf[o9&4Ff o|O!IB%' );
define( 'SECURE_AUTH_KEY',  '_4;3sVFL0O@Cwxu4[i/spc*dR.)j7>aizGB;_6@psx8E[HC7PvvX M:Qc77qPPih' );
define( 'LOGGED_IN_KEY',    'gB;V%nne*X:TN(a1R[z_{Ys~wLntspJqN I.2L<y!,6cD(d{Fd[#9v0]%!{ x 1!' );
define( 'NONCE_KEY',        ':BHoQbJ`/0mid(pt,_S7x^B(*@V?q6Xi,^O=R?,<R/Qt8E];I6e6su_9P7d/TXB]' );
define( 'AUTH_SALT',        '5nB&V5UzC]n}]]@tqX0OZro309vx]JF4Gb!Z{PDV1pS3uA*U$|3,MC4Ugx3Ag}S*' );
define( 'SECURE_AUTH_SALT', 'XnqOuxnN>:O29/<?t@>nP%n=w6V-_@`_=b1EX&|^c7)j,|$,RGr/-s.H>~h/j,-;' );
define( 'LOGGED_IN_SALT',   '<H[BK{*7]nMXZE*rjnwC?9&Ga3OqXWFsfZcc0Z7$]6%p40w0Mn>jiAfS`/XY_)=*' );
define( 'NONCE_SALT',       '{@BzE#&a|q@Fu|:~@NyZVF-IMg,_pZWIWA]bh:`QX}?u,F!dD.{(bk060;K+@I^b' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
