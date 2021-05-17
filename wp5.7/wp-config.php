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
define( 'DB_NAME', 'montheme' );

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
define( 'AUTH_KEY',         'U3hm:WB{>Cb-fyLS 3_7Q-,14_.bGOQ%Wcfd95?QaA(a7nKvOvXl_o`7H|0#W&Lj' );
define( 'SECURE_AUTH_KEY',  '=Q-q.Sen9Dgq|O @q!4V:a%J3?N3v._s< ]5(a5H!LThh/yp0oqxkJ^Pj#>e7eT~' );
define( 'LOGGED_IN_KEY',    'E|0:5:ynczlf!)-{l>[%NMOJ&/EX6(nj+0BQ0HorP!Vx`t*YbLxbpl*}tYgV1t_.' );
define( 'NONCE_KEY',        '4{R-mu1KYl!S2{Dh0}x2~b NlYDWI=Mcx1&8*]11j+l_eus ~NmYrDn5,VM}0MX?' );
define( 'AUTH_SALT',        'Jc@EK*sW^!8Yg.d{pPD#4b7JaIH<o=P:x_!00m?p0h&4M}UjuQC!$3R@.$4p3TmI' );
define( 'SECURE_AUTH_SALT', '1Nt+1tOa>lj!0FSf2vZPh>,XvRuU&~O9[65ET&8?IaV>o]mo$pOdC4fb7N9H?:~c' );
define( 'LOGGED_IN_SALT',   '+I:6-GR|,tY^^zTL9CRKtT8]TIv%hNBUfkN8?3mF4ShI4s AP:LPtJ`;.&sT<@jF' );
define( 'NONCE_SALT',       ',rqB%kf]QF>SI`$[vxRf9rhXtl*{vS&O`)_/`aDx${Cl_RGl9,[&r2$X?o^dFnV(' );
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
