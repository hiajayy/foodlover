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
define('AUTH_KEY',         'szpPNjOicjUbOwdgp1hNYu+L8Q3YHfmawNv204+fCJawKkFwpizrvKTF9W6+UO34UwUq8ABurvoJ7pDAYHFdlQ==');
define('SECURE_AUTH_KEY',  '7UvYIzCHKS23jOwS5pkKu6DWL0UpUKEWeVksU7VdMRzpuCalTjx2MGblmkflP9dZg18UIW5OtXERCwh4QD2OtA==');
define('LOGGED_IN_KEY',    '7z0EuRvHrdvTjUvxeTTElCXfd5CS432ZICjmPpLa9L799jYV49D8fNlyGP6VXregVP/Q0WA6Z16BIMLFrruUfg==');
define('NONCE_KEY',        'kgaNQlihp9iHB984xGO6e3VxdHRDYMXlxF1qg6f9m1egvQHNaaNdUsxFl9U6OqaQ54wh9yFWK1Pw0ix/+4e4/A==');
define('AUTH_SALT',        'VLXQouk+QD1s0y6YAh69eZgF44xr+/TRz/wr/c47lXeJtwwAV90S4+KNXaaLM3arXZocv8JI6dDgOgWGy0da3A==');
define('SECURE_AUTH_SALT', 'aQi4uYRsL8hIFyxRDtqlfzygii/nyYles1JBdSqwxpjXK/0Z/21ZWRAgiq6KgNUSfI0YAgAbWZ3EMommBIjmTQ==');
define('LOGGED_IN_SALT',   'WqsOdVatyaeSJD85iXskR+a5qr6ogqRlw7U39H3FJSXBbA6bIuQtrMWWGdNFlcKQytcomUDou6wT+tOHI3FZfQ==');
define('NONCE_SALT',       'wXqQS15fz2EO9dCqU5oNDGyHGJAsdP4bdjTNFgEAHaXm7K5oX58btZ4LS/H7aBSnm9kKH7vPo8xqzPJ5uU1Cgw==');

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
