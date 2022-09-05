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
define( 'DB_NAME', '01pizzeria' );

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
define( 'AUTH_KEY',         '`EeMY9!tH~uq<S$&s8BJ6K;z>)??c0a[8Z[JYJz)$@$=d5-+BP%&9Z$|~EUBRJ5x' );
define( 'SECURE_AUTH_KEY',  'QKmGS`7}|DrH9*V<d1nfG#huvomsGM(Pf_^,w,R1vhKN471lMpZsv={7Ieiiaf!8' );
define( 'LOGGED_IN_KEY',    'djcF^W2bE^;8weh!TRTP?nx898xji%]ZEW!U_:%/9r~g?H`kKr-XlfcK?; d)1d7' );
define( 'NONCE_KEY',        '5{7;}hEc?Vrw@er.;$+o=i3Ecc19OnL+h)%.*&0a2!A?#6;pmkBBBwdR|g:5sio,' );
define( 'AUTH_SALT',        'E+goj=.#5zys1S1)]pFB1)[`tj*{F.kHu=@%e_a0b1|0.~=)?1`4=%`Dj#.c-oMD' );
define( 'SECURE_AUTH_SALT', '}Qsa=<WY6`sEuQy]<?Zv/*;}fBq(W=}}s.7K4Hn[s4CO<v8`Fl[Yh927AtjHR,)f' );
define( 'LOGGED_IN_SALT',   'k0thL4Ty0nP>yO!|)WIY <73*u*ax.[vY_*K5iv5)d8O0}H;~f{>$RYKXtTb*$mv' );
define( 'NONCE_SALT',       'E/>A?0S[7IN&KGbGJjr /y.%#P1d7xvS=W.NyNm(E*!vkKc#9%w|7vgF#j8>*_Sb' );
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
