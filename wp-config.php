<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uGS8TsgePcf15/gzrWn32ulBEi7dvzugrs/CbPUszz9Bq9vEbJ7BoCv/zIxdPmGfo2sOKmSjAlEEsvIAogdRZA==');
define('SECURE_AUTH_KEY',  'oeIh9tVu2N+x5Q1lqMiONgm/kDhMmAV5Ay06m9gv7PmB+o0qgVDKUyjMBpjabsdWmqInKX7oZF5DVVCW6RYlUw==');
define('LOGGED_IN_KEY',    '2tlpLyXap4djsQIem8CfhW9ffeYmYMMu+ao9rOwqgL3xja7yuy4wlMfJEU8wFjd0o8KcMbPi9yCtUB61C04xuA==');
define('NONCE_KEY',        'WOUOBPjxcLAiNbUv/GdWyzTfAIyZnC9CXNA/zlzx7ZHCtM7i5VOPISAfiySJfDR+6Ix/Utmu4gAZMMFwUr4ekQ==');
define('AUTH_SALT',        'XgvwICyTlt8Dm7d8x0PC0Cw5YggPCZ8KWiDHNmHPGcHLDf257ensIcKonQfgkF5sLXRivPb8LdDhfSzhdPBsgw==');
define('SECURE_AUTH_SALT', 'TvNm5Tr+4JSmfm54QdDJtadVikhbUW4xmrQVVZ+Q5r1pPVFcKMHr3xa8rgupxdcyiiqTvhFx3KoKR38Ln2C0FA==');
define('LOGGED_IN_SALT',   '6qXhKcddUNpWTK8sKTMOEwXO7Do8QTvUyiFDpHY/0c+gIsIfWflDBjmTZvPVTxPQOfirFc04NpYiVxaqNhyH6w==');
define('NONCE_SALT',       'n8eoKoRPDbBT614xQ+4ryQFYJDlsMwLJZhoR7rZyHtR6SOXHGvHGayW4/JTiWUjQVu4wMguBSN5pWWnFSwZJ0A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
