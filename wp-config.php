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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vipin' );

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
define( 'AUTH_KEY',         ']e^rwGC=ob8j[Cr/,r%/a/Nv}Z${<F~B1+&+n @Q+TJN6H@H30(tU-BfS)W~_~r=' );
define( 'SECURE_AUTH_KEY',  '-@0,`. ~e2)wu@oZ~gt _Q]m=h<$9,0~K#I@`_?`815St5gCzadjWRW| +>/1<PR' );
define( 'LOGGED_IN_KEY',    'A^8#uU4PF*@8:pu0?0,9OGG*9oy)bB })C}yKb6I9da-~U7F(AJ vnUu?&]qOz2w' );
define( 'NONCE_KEY',        'U-?P$+R$ay=@+3G4D+=O7WO(5{H>YC@xQe$*jhJZ@^Aa|kcj`9e9 F-N/<=SJw+H' );
define( 'AUTH_SALT',        'Ug9kwuNP9p(#ej<WfWB}Y{oDH5cZ=z|u@v-eR7acL9!1r.Ps<Vy/[ik@]$r75sf~' );
define( 'SECURE_AUTH_SALT', '|m<qd,|805n1D:PXn@]h#Y-N6_?wa81)# XFix7f.08b=[TZ-5;Zt NR]{,jky0u' );
define( 'LOGGED_IN_SALT',   'cgaqz>$e}EZ}t#RHz~/&,v;DXDM)j2DV-VDl({2<[{++G054t8ft8M]fFzxQ+wlp' );
define( 'NONCE_SALT',       '=C.APop&su6ChTS%LE PO`a{s7@Xd-RZx]<$4ChiFNeHkl4p2bs5<2LyZk6jTRf,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
