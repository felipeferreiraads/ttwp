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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ttwp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '<:4c0 ^BQE,wyECgt<Y_4MH<VAoly^1J/>Ed0.Sr{kBO2HBnZjlDJH1H7}b6+)_Q');
define('SECURE_AUTH_KEY',  ' d+hcf*so )tg^5;nT.EP*}<w^91D3%C?V4CrRyaVVR%{cF*TFcT5Po.*,.gbSp ');
define('LOGGED_IN_KEY',    '5Wz`CAcl9[v7G08f5|whiF.hJP?p&]M4ix7i_HT3!qALmj{2CI<c@m#o8B:2QrA8');
define('NONCE_KEY',        '8u&]pQnVd:F&a3y}>[F%]hQAQU,T0VVqsDWvE1Y_f$cyt0k@ouznqbi)t6dKC<<X');
define('AUTH_SALT',        ' `fA]u%MTR7ouF}C%wIte]2!3N(O%;f,5Q}=7D&&Ze1PV3-Q?;90|Z)CVAg0C2g+');
define('SECURE_AUTH_SALT', 'r~XDajLuq)Z]ecvub1i[#cs8Ex7n:yAgC8d$7#+~Q/FOK=*0:i-~Qie`vu4oc3tJ');
define('LOGGED_IN_SALT',   ';F^:*yT:QYgoeug><.$a:H]W*Xwj^tlV-va-W9iK2i*0*y__+*8Y]qpuqBdt*D*b');
define('NONCE_SALT',       '9==bXA`l7PX&Dk5@EzM{_6U+S|y:e0D6<P+x)xN$)baClZ`5TPbt5eY},(.OCDeF');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);
define('WPLANG', 'pt_BR');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
