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
define('DB_NAME', 'oxxhksce_unidadmovil');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'oxxhksce');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'nRma0E64q2');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'FvGeLo.3LD[Z`.BIeM={TL|WjQU1Ra9t3F=D-1j%F6rs>0AK9W)nCe~Zd$T=/T>W');
define('SECURE_AUTH_KEY', ']?_M0Re-Au9j~G[i!B!6.N3}u(%M~&{+706-mVgY[Eq]UMHm|KAG~,!W<<@FyOwx');
define('LOGGED_IN_KEY', 'UgrO&T`|d4&<V$fIvAXj>JwH^]y DOV7))bP4awutD6j{c9rcUD/7qI 6n-V2F24');
define('NONCE_KEY', 'H9f|;l;T[EiE3Y6uZ%|,iz}Z,;=?itt<[#o..*2>1n|9X-IiL:a)wr6]e2^EomjJ');
define('AUTH_SALT', '^;&Q:sVecBZ/RXYVIRNu[`_0ZaKLunNL8LD)|P]~AyiCMA)K;m2Ab*Wm*egqJ^P$');
define('SECURE_AUTH_SALT', 'PL3AF426u`irMGqm:2OWk#T,^[l_Lv/lvq@a]z%ziqQpdE~{#JZZPU7WpEFg:5)?');
define('LOGGED_IN_SALT', 'nNE*51wGY3|9EXDeUo[C6qsYlKROo)>d/`CC;d56V7 %g]C+Cz6e.BGvSwm{/fpo');
define('NONCE_SALT', ',2hx9]J;[kQhLj=_DDf79.ZMhIxM zdNZ_`y9[W,u7ou5ga(ms4~Sw$j>z?%z?*}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'np_';


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

