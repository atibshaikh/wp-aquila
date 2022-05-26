<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themedev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*KjxwSL(x><=#C|Xf4EO1$/uVxZj&$WX}kgXn], 92w9K{l)WCD1a1$pMYQ-HSUv' );
define( 'SECURE_AUTH_KEY',  'LuO<;?NnQkpbr&]9(bTk++ub+i|b%.i@7dj>Aa:yMMsps@#Oa:>$i!$6F6=|sZV~' );
define( 'LOGGED_IN_KEY',    'UoZuD:lh3$I7TVerjR)/?l2=VIwRV;Co5uEu/3p8E+:~_w@TQct+|+UX/>sI`{Zh' );
define( 'NONCE_KEY',        '5};yeaPPc&l{!ga^c6!eto(x cyv-Cy:C?99vCI<kJ~b:r_F$a$:IW!U7*{tp-Mm' );
define( 'AUTH_SALT',        'O2j)2cPF6{#q^TC$QR+NAGsHV0odviT0U$buHmqbu8lIvqh!^,klFDZ=[#_DE3h5' );
define( 'SECURE_AUTH_SALT', ']}z.c#kbkjoy%ev2BDh|^MpLI*Ji{NtBzfx2:st&}T Az!#,$Vy+88HRAXC`g<#z' );
define( 'LOGGED_IN_SALT',   'G83A$A/+zr{<]gM9bLi?n9q d ADWW#Jwa(b&,7ZCeV|*0(J,C(vzaxCrlIx_l3Q' );
define( 'NONCE_SALT',       '.g7HjE(_2d/d@dG!L>[W*uF,h v-z_o+%FNl>g~xy})ni;?bg%T^n:7b6#-RZXyo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
