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
define('DB_NAME', 'prueba');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'prueba');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'prueba');

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
define('AUTH_KEY', 'W z.Epw%nv!;9crR@K(qWMsa0m[^WK@ekwjs@.x`L)v-*3-lD-@x7t&osz|h|,Bt'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '2x2A+nfAxGV(5/MuK$A$m<}IMSjOJPE^TDah#f4N=`FB[f3iiHphh:lCmc{~}:yx'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '$%EPIJ`TZo@V$6m3RE,0KddF!o*h<btEPgX;Va{<`huAMRY.*Z[,43|IAh_OY>SM'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'hOt&4[.uAs2Ss}Gn$?gYM,@v?qu|KpWg]^!@EuDN=C|rWuAcc>>2Eu_-<Mc]utc+'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'E=7u9U&#Q^NI|$V]?,v}DZEtbE}wJHg>4i.Y^7b[Z[gSR$EK-d5+P1U%x5/t)LSM'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'U0?:O%t7WW(ggnRS`foEc,E*|&I_bq{}<=EE$(DMr{41yWq?Ri}ze<k}OdczR^8V'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '>&]5}~A*K<EsiwpPKLItiEKZNrqRe5g?hr= #JsYRg_8jL_>r;-ZXOB?^IOV?Fy!'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'sG:I*lB{1tU/B-s*yF6(p=`WBBGzBcyPEz~H)OQNNLuL#0;X_S}(J3u|.(d>/(+a'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'rmm_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

