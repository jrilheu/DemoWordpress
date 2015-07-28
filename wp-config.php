<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'venavegAfLHETEDb');

/** MySQL database username */
define('DB_USER', 'bb8597f759d06e');

/** MySQL database password */
define('DB_PASSWORD', '89ffc0de');

/** MySQL hostname */
define('DB_HOST', 'br-cdbr-azure-south-a.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iOd#Ya4XSD.oB;Unx1Z!G]-gwF5d&R3+t%:}|@*Y-N,;r|ESS+.Pd-FzfH#y7I|[');
define('SECURE_AUTH_KEY',  'uG;9=HAAENGDOn+[oyZl7*lfSwBEo)L0ZcY6MA_FoQ]+m. ~w5| F$!-b+hzTNGt');
define('LOGGED_IN_KEY',    '4Vo.I#4I?v,@F($~[*<+EtIj4qSHWA{c4[E#e?5K*`e>_v|J=-8vT08K#6QRyGvJ');
define('NONCE_KEY',        'M&]=?cx!!-s[^w~[-$<0JvrbLcG8A,dfRNp-IG$40NU&Rr};m317,4qf3dqm$wm=');
define('AUTH_SALT',        '--:3<HqwG8:ua}X+kJ1LJzwxY`+Z6Dhd$cIF}-]+pD4TW+8|As^+,!klFbgd4~x?');
define('SECURE_AUTH_SALT', 'Mn)LZUWuW3K3d@$=aHS 5@+YOe&vy<C-<Km+9f-,|94dJz*Vy+dZmqK6of=tXBza');
define('LOGGED_IN_SALT',   '+0X6r+:2+Ca8o1Xp/4;/{JG^>|CH2oM+]lD(8ij&MO(x02~DMCq-lx~;2-T!O@99');
define('NONCE_SALT',       'tXhO]NQn{@9y$2ciW1Nl8?XDFZ x=LC[C(,53FY9#u)ZI1|I<HL@6LQ5CWcjE +G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'veng_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
