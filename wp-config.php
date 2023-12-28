<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'v[`F)N;4. ?!,/q:g87 ]ChZYW%&+{kja%t}j#=7@/MLDfQ 3g)}c<5mOds1AIuT' );
define( 'SECURE_AUTH_KEY',  'T.Jx]Vgs`+Fko7?0RzP6k0JT,AcUFSqme5s^0<CCb8T&;SjDm6~b<@$aB%O]W=.S' );
define( 'LOGGED_IN_KEY',    '6vAjYYl;O;2m{dSCbo(hB!n]9ZFD$Ol6?jV(7r.jxyslir3&Pu!h@8) vfJJ`):&' );
define( 'NONCE_KEY',        '{&z0VF(vM&>8W~fQ5$$Q)Fy]l1u-HDdYnBLT)`P&>EFN<aF{|-hcyKv21TsM;hTy' );
define( 'AUTH_SALT',        'KX1.{yDXWj#7J6MZ1a9<y.jjf&CO#lJfM`X{YxD{{(401<]e6a+_PVP4woL_*F$T' );
define( 'SECURE_AUTH_SALT', ':C6^DAwIqlpnO]=z!*L!~K`1f]*vumy:jj4^-1Tt#.hY~+w<PgkBd;;#]E5hd71L' );
define( 'LOGGED_IN_SALT',   '&G{/?}F0HmbPlo2g8F7,}B#db_=i+&b^L_x,dD*4OPLX@6Ay02Q`t q~WJ{(8(WL' );
define( 'NONCE_SALT',       ']ZD|(Epn:3x-cOo=yR^Tx(RoI%OS}5;U#j89]$dsNkq;W,o*7M4LaX#@{@8*87&9' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
