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
define( 'DB_NAME', 'vouga' );

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
define( 'AUTH_KEY',         'MVyS]Vb/%3t6-`i0s <9Q[9(T]eeBNLQE.GM-e~GbALcFe-&vc0;fvt)C`pQ?Z(]' );
define( 'SECURE_AUTH_KEY',  '[x1[*jCa@$<2)E]JmcQDR[{j:OH`gF#l3AOOsx?[OIdS=tY@J`E6#]k/0}piO`?i' );
define( 'LOGGED_IN_KEY',    '.Sed_+/KaL>7mVE^|6)MutQ>R%TW|GMen]Z~E.rosK*=^bnVr(i)5Dny*!X$AcCV' );
define( 'NONCE_KEY',        '[wM[U~~f0rsjw1a~.G.S5AOGHy!q;LoT.uWW{:RU;%*1vJTa|*.Q 54*;8JFIk$8' );
define( 'AUTH_SALT',        '&:D#KRklrhRs1.:gc1(8r#gE0$l*/ @pHyU=rbXCC5t<zr/;VBU.u}~C443E+a*]' );
define( 'SECURE_AUTH_SALT', '>|dn.C=-Bc%]ZD#OEZ9#cE,?Xk!-RCesL=vxbBK&>NMN>&GLr; Kc$o:g}=H[jS^' );
define( 'LOGGED_IN_SALT',   '-LEz+b[<|hG)&+;3X4fPAEI7od6kjLPEf`7<iH)v_*wALt-f|/(ag6UnFb$$]VEy' );
define( 'NONCE_SALT',       '1gX7BGYU LwBYoM)rAd({N~z{!RntB O7FXY!BBvdK~bio-}z,r{sGAn1r>w6w!F' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
