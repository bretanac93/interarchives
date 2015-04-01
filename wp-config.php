<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'dw:lmKK_|EFt+doSa5(9tdv4g%r+.LqM]${IDS&w0+=.7MwxN&hWQ@i8bYM<M@Rz');
define('SECURE_AUTH_KEY', ')H|C1q9w/2yH.1+Zx6^QY@B]yo`e*z#MC6w@w(2<TAh&b!cO&)epq5jUY]A<?q9G');
define('LOGGED_IN_KEY', 'iJ$<)0jhWGdDMl@R0|1K+ShS6w2cD.mHmIO^cZO@OL]%pUv]8Ouqv@R SIS[jMo;');
define('NONCE_KEY', 'ip%b/1dz4U0]Rde)jA/q&+osYO,0JhD]]9t]Cm:$ZkLitsU^nldyLcBb{(P/.7A5');
define('AUTH_SALT', 'uPdXps,xh5ZR0zU27fID)-P2^.xr03=tjuIV.Njz$rqA?@KKqjvKX5X0?j>6`.^!');
define('SECURE_AUTH_SALT', 'N8m=g8QG,nN+pk#Cq7t)jWGS- ,0I~cp&&g=]l 4Bn,}J~6&Y#GBVRu-*]DsSHe,');
define('LOGGED_IN_SALT', '`9gBV2#T0AqY+Z<jlQ,F+RU6kQwy6*#D)3abGudO)A~;7r91K;dX2/7Xyqk4;:_Z');
define('NONCE_SALT', '>;x.YP9UjG-%7 5b8ebXQut2R zY5o (KcVoqlF4DD8*!}fOH5PS&azZ`fB%VA*R');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

