<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'u818529812_count');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'u818529812_count');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'bpbkC5Z95k');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql.hostinger.fr');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GQ_/T}SHsFYs3+LX&j)gQ;,3SOBi:pHd=V3OgjJk1~Gv;qxSM#q9T2qyX?(/-Lq=');
define('SECURE_AUTH_KEY',  '|YTQRY0O^IP|draJ/+1[TI|>W8.9<Hj?-S:[ni)};$OUHnPay(A%|OuPX-@`BVsb');
define('LOGGED_IN_KEY',    'yER[L+7+d8(ek;x>cp|h~+.XvztIHl]J-:@++T~t|e|@Qq12-)dUazpv:9/v# tv');
define('NONCE_KEY',        'lEb XWe^F T^jfI6AR:o_=o,#{}LoL|P:aO;|5+hzgNSl$AKk[(i][/ .uoA0kq-');
define('AUTH_SALT',        ':vtRc= -59eM-H]l/m!OhtC#]x&y3v%2{A!L=K/<qHJI3t!1()qdR|Nc`tj*j9oE');
define('SECURE_AUTH_SALT', 'P-<r]q{OvhY!0r|gcgZ=x(gz=ekwX`Zh(V7f/,kEN*~R6l5Vf[^|gb[z3mt]ZH)n');
define('LOGGED_IN_SALT',   'i,4U<dG>?QGvtdeC-dIxiA=${IF@%P7)sF!G?U$^&r-g+kHz6Q`h.|Edf2qX05W8');
define('NONCE_SALT',       '4w{@!*@l{w0,ICWqIW-H.HJP }BKRGN$Z@-$n3/UUl_?^fsB+IKzvqJEU?_Gi9X0');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');