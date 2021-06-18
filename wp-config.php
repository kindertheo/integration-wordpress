<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CN|Q08K6O<^# 7yE#KNlF3**TUnQCG4,J5S#o,`.Wh*X9Y5F<&4}hvYo_1j,tKy ' );
define( 'SECURE_AUTH_KEY',  'w|,/B0p]tg2Mw}r132u5Q-xH-gUn(P[TXul`TPL9)avE[#$hR0S]nxk(83^<a/Lt' );
define( 'LOGGED_IN_KEY',    'fP4s`JRRYnnu~gyHMCb4t+p,C{S#t};R.V!!d}?Z~])-}4Oh~CSHk4J`BR91>Loz' );
define( 'NONCE_KEY',        '`;~X>WKq:<];0q#yy+DG]}7hrNG4_U8L~qRkvE{IdTk5G#(Az5taf1dS]9o6-pV/' );
define( 'AUTH_SALT',        'D4*HC:n0<)3mPOF7T$cf`$Qg@B[0TFKqxcdYL#(XM`^CEw73aF6]XK0A (1$|+PU' );
define( 'SECURE_AUTH_SALT', 'Y:`O}jCe1V)ML*%@<Co!M24+/|8H=eW4e71a=XjNB37*%v=@Xfz(]+VL{W4MeevB' );
define( 'LOGGED_IN_SALT',   '~La8>XDhZ!-3A&Sz*E3Po`1vVuigT~zTHZ_5/P|WE;c>j}w:3sQVjyk>I@`6`?K0' );
define( 'NONCE_SALT',       '*nB|1wT-;fiHI*nBQ*@ELf+f^)~=bv7)}k.:|0V!471A~=hsEZH2>OkX.]8,[)kv' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
