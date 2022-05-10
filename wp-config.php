<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'dbs6178600' );

/** Nome utente del database */
define( 'DB_USER', 'dbu2565020' );

/** Password del database */
define( 'DB_PASSWORD', 'StageIungo2022.' );

/** Hostname del database */
define( 'DB_HOST', 'db5007498672.hosting-data.io' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'nDc)yscO3iqQohK{tZ~InDSLz(Ndz%2D}H1n@,iQg}#]PMfzwGMV[c[GW;m4#}5M' );
define( 'SECURE_AUTH_KEY',  's,%&3Nqp)>Dq<Uxr:ast7;Mo&uh3<ga$w|08yIJw3a<oiU&:9F `HPzEm7@7#^OI' );
define( 'LOGGED_IN_KEY',    'i_uKx_+`)O{jG2Cb stY6_^55tM&#Hr8t(Ck(B:S58Nc!&nuJ8a2U?,{aX#c}4+c' );
define( 'NONCE_KEY',        'wb<1FLZ4Q@g|EB_?kPtv@|+K06HJ-r+L2b3`f c!wC4UZ@|/zNJ1Z9oE4|imwF4Y' );
define( 'AUTH_SALT',        '+H@W.l%8~ XPUv;=jSxS<Dwu}uQ@IZpmE1(|cNpw1RYxv]H#cfZ?dx2;v#G./2}D' );
define( 'SECURE_AUTH_SALT', '(v6,}L6a&>Ihs4t&3x[pXBn!u!?~<-)<&7L2RnSVrv p{c-rQ8^*!:kf3OH{E.T7' );
define( 'LOGGED_IN_SALT',   'HfX5oxY,:O&7oejbX?x@k[9jH;HyX0Pzcl,{{%U?;ep3?W5Ct43%H1%^KZ346RQa' );
define( 'NONCE_SALT',       '5@oWgWRvHf*4a&9H]kl8%P.0eHUJN@m13J]}N=RY#dgC6J~+nW>;S2i7 2J`0@43' );

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
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
