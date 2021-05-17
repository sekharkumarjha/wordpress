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
define('AUTH_KEY',         '4gN2c6ydGztfb4ADI5OXFW8iwh906G4zWpNShG+VEF0+ci2BN06UwH7MIyAUE4yl4plgCHXSJfyLubFIkRwtqw==');
define('SECURE_AUTH_KEY',  'QEhUIpgJ/1iN03lkoRDfx9VVYnQ2z29//L+FUrXvDgOHggxrzsfW3MZ4zxX4o/9Ox0/H9T7n1iZrr8D70RER+g==');
define('LOGGED_IN_KEY',    'CNaJnGEr8m+EMHi9wqLjbopcATf5dIzhWPxGGnEL/bVsnsoAlpqf3kawryme53fPPCkm+YFdBzC7LuAfQmhWQA==');
define('NONCE_KEY',        'At2+wqPU/6bmKh85LkI8bAN9NEGtuUupHGMQJGEwxn9DbpXuDD30InE8jm3Q6Cr2Da5GbxWx35sVhRHGT5ZC2g==');
define('AUTH_SALT',        'FiQ27g/VQidhiKNcrjhwvuXxUP2ZSeqF/MXxxRy3uqitrEn14oOjEEpTQ0ujdfb8eOihL9QZnLQLi1XjPirLCw==');
define('SECURE_AUTH_SALT', 'SUsMyLFv3zuZtRnFdqCNoBXtH0vZfT837Qtkau/KinV88wgcYFSpsHtWHtj7oKeO9F8OmxEeG+FB0eMzLU4Kcw==');
define('LOGGED_IN_SALT',   'J8eI5VTgRQe7/6RalXwV2ri6LgQhZf7M999D0eJPIm/T4EGE5D7/x0O33TSCJYMkR43ftKvISnp0dLhLXl5IbA==');
define('NONCE_SALT',       'CieXjt63Eq8+iSW0rmCOWi3vUHc9L4ZpIL2qArz/0xanKHadPZ9EYkVOOWqwzRIOsflaLDMoG2hcO8b1qzHYMw==');

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
