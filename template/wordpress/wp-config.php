<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bananas' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[k_=BNWc@?3q76Wg?]KB[w_z]g^@>S@l{Ro_gB7u_)[>V~qVbv]e7>HHpV$xD$R(' );
define( 'SECURE_AUTH_KEY',  'dEd`J`-|DizPBk{`5VQ(;D0lk=;?:fpphx.&sVS%u:@A<}{dB|M1s=Nd/hdbID/n' );
define( 'LOGGED_IN_KEY',    'Ldyax|n/v$<HXZnrdGCziCvZ7&i|z2LraY# aaj]ljk?.2gZLbGD}J0p!{.OqvoZ' );
define( 'NONCE_KEY',        'M3*gbKy~S{vUb#[P[N.Yn#[e]{Mb7+tPkgK;J.++Jb*FZZ+nn*p)|.6R^}pG Np.' );
define( 'AUTH_SALT',        ')G=jSZa,H*nB3I%|P{oeA{v>3TP*Zw^vw(9d(o]QG+CLlpZ0_8GQvW3C]M9wa[)p' );
define( 'SECURE_AUTH_SALT', '9&JnrkPivF7)arb,A_:EQ2d0=>a$C^cTIwWekyC+r67|E9x#Q|@KAJJS mK+m}ml' );
define( 'LOGGED_IN_SALT',   'x(Jd*x}yEoZmL0Jio5Q-7!h2CbF:Dng>!&A8:Y1#4]5&NHipROTp/8f~pN<@6}R.' );
define( 'NONCE_SALT',       'tz:wJdG$dtpbo^CgCv$DMHbV]hox~D%sI:H5mt<h>Lzrp.aGu.3`gU3EK;:)=%k)' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
