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
define('AUTH_KEY',         'TfZq9TJvJJCzpa75uVMKw6JPPIPgKqCqsziLxDMkP0tJsATjFG1lqMXhOrAs5wzlSKYxRghLkvJW9+wg099d4w==');
define('SECURE_AUTH_KEY',  '8cL+wVNZOf8P+sJH8ZZ4V4Yczt8h2sv2j5S6aR7JNfQgBcZRHwLslCBDVPJDcTbh1lY0jEl7eDcbAlCbQRKoyw==');
define('LOGGED_IN_KEY',    'nWF6TSH0cwsR4Y8/UusMfymq5Nvhn04xxIA+zbik1vUpqobJHttEVV66SixEzDewLYklDcnMXn6gOrjQF1lSSQ==');
define('NONCE_KEY',        'iR7EjqFxE3KOtelodw3xIg4pWLfYSZkoklBrbS+5DeLccHQDUKnLAyLqDF16vgmK12J7kHcS6qJ1cD2GN07QQA==');
define('AUTH_SALT',        'uT5jEWNlvibAZJIlkhUNw+SASOSyC34wqOlxv0E6IPEsI17cO331kUm/8Be2vi974wIWaY5wfKTEk2DbPKizRw==');
define('SECURE_AUTH_SALT', '6yot6KqiRrXI4WbblasAKxyGPJWPhnUKy30qCJ6DCgOjcSn1iPJwS45ayXhpQiaH2ToZDC3xD/sd1lB/YMLmnw==');
define('LOGGED_IN_SALT',   'Wzap+7Yj0YIRk64SpJyVCgCfegZN4oADF1Fol59K85ityIrfmu8fMTETF8H7VUlCD63Kg/hp8h7RfO7DyabmsA==');
define('NONCE_SALT',       'd1fOymLGlbcvAWETqAX91dn2YaSuI/Q/EJNTnqr/o6a0RhYnyjHhwdplmzRWNwQOB/6snDn6LK3ZApuaDIUyFw==');

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
