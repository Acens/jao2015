<?php

/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xamppnovo\htdocs\JAO\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'jaoodontou3');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|HM^DRiI)(; *8-m*3_[V*X6yXi4U0jKMj(9o8v6=Ks+rBDUoGMpa?vRoKy|3g>-');
define('SECURE_AUTH_KEY',  'Xgvf+|!26<?#8~Gzv]xoX8ezx+.6~$QzZVtm-T+Ksimy`(K4NGVqqOL-waT7%#T.');
define('LOGGED_IN_KEY',    '-nCu.9_s`f&-*>}?+R_mx<>%9pW/!#1+={bSBN1DRrx])c1o2g+|FE6b-Al@)r7(');
define('NONCE_KEY',        'V`#yf)3LnH0_VuK5&tH@7 2@,q0S@X?<=7*waAn93}t;{k<-w=(~|XGd|p]?8^&_');
define('AUTH_SALT',        'Sq_8Y|c`b[O7LNA5i4|X-Fki<L,Ii;D}c.l+2cRkoSSB+x%|)nN_P%}uCa<R<o}^');
define('SECURE_AUTH_SALT', 'y[I:]{}2 i7c,&k!TxzFlKZ4WT.B+UzX.UAlz8:5OE{fg{2X62+teCy+o=aFG68|');
define('LOGGED_IN_SALT',   '6%4gXH5IBjw3:,s0}XQ<FluN;~-*b~BbpDiJ$5$LCWXb{J%Kaoxyy&CP!(9.0kj6');
define('NONCE_SALT',       '<Fp9S)9+|ID`Qz/1[Atk+X2obll]EqQf|[loyaq1.Kx84<%&GYV}Q]0#L+~0gk$d');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
