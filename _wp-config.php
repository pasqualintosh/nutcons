<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wm3m6biu_nutcons_web');

/** Nome utente del database MySQL */	
define('DB_USER', 'wm3m6biu');

/** Password del database MySQL */
define('DB_PASSWORD', 'k147m3=*jj-]');

/** Hostname MySQL  */
define('DB_HOST', 'lhcp3032.webapps.net');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vdc%M@Ts<Kb2-&]~&61|wM_JceOg:egg)=qnyaGx*zhvz ,?e.eQw$#rI2H^ySHN');
define('SECURE_AUTH_KEY',  'Y[-VG.3`;4G+;;bQvrhz-x$}5k!8c A]r`EUPBS+A%g`d~.}oj?5DZ`II,lXys9u');
define('LOGGED_IN_KEY',    '.pj1>*cU&Q#bNVh>O;j~r2,&+qa;>T[%4FX]g3npBOZ|-6WDxmP4R-hbNO+ug0.=');
define('NONCE_KEY',        '~{8{!_gti+bW30QI_ tEFn?NS-R/CzW_U)tNW=eLhKOk>MKg; (3U<rZrmXLhW!E');
define('AUTH_SALT',        'T+]fs(<M$^!4b>7`/?0NiO7124Wu]N|?6LW8-W)xAh=`Q.?KH2gYdlFTIeud{w<E');
define('SECURE_AUTH_SALT', 'pnr&BfCJ}Km@)`#l6y83Q+*q@j#z^y6=`(9oh&;kyQFMvC>@$-k<O-FjYn,7FGUR');
define('LOGGED_IN_SALT',   'b1sklLnJviuVNb,>ZI]MY)0~V<_0E;Z-cl+6+ocju)bmtZm+=E_cuF3L`(|u<Y.v');
define('NONCE_SALT',       ' V[H?MKM#37,(g~YaP%@*.Z~kU.V/d*Ux~<E&~g6n8=*/9JL_%N45_8]g2=+dyE^');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
