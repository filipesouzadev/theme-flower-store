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
define('AUTH_KEY',         '02pJMtOSQLP/PksXXIkpqgYOq5uDrsVSM3krRtPy+DJ508uYvpQdhYzj277BwzCkcT50wjqWnV1IIMczcVP3Bw==');
define('SECURE_AUTH_KEY',  'tuubSjh8cKYAwRgl/NjKLFFnuYObCeVJyiqz4OTYyInAQbzE3Gquax/JmLMeiwT3nj6HCRStBmiRlOwVIe9k8A==');
define('LOGGED_IN_KEY',    'ocQk8yzRpu2PvtSMTwXOiajpxuTtuiuM8XtFPafUs1Mmb1YYfRkfmk50APxRbQTMK2QBDFCPKpgpzI6kk2qAHg==');
define('NONCE_KEY',        'YzfZiqMWDHTKpIMz601miMiGzIuegkCXAUHaJP+ZSdLz4g+INHSN8sqqGqGa2L0EikF5oQbVBf7fXPMyUm6w9Q==');
define('AUTH_SALT',        'cLzWGuAhFhA/AVJI+wTdzdBueG8uDF5ew2vAzKdxu+a0nYpV5FTtCD01ZjgDTuyYeXWUYwCHMBhaszZARA+obg==');
define('SECURE_AUTH_SALT', 'QChmc7uXjvwBbLvVJxjeM+UCxRvzMbx+aHGSOspu5EwAdXb5fB7HZL9IkW0WFRpl+8OOdbhjwMvzDyCkEaCJmw==');
define('LOGGED_IN_SALT',   'U0VPcIDlMbsN8f5e9JCxGeRambINmNzUrzB8v+wZ7lAPCMNEmEwKup7dY0/bAHEzQlazIWXP3nEGxtOlTGJ2bg==');
define('NONCE_SALT',       '/tgVOhoNuJZueGIxA8NpEkoxuNdBpuACWhWSNRQqMGJ8ueI2YuHL70dXW6b48Szs7hT24a0Vi+bcq/zGR3VqNA==');

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
