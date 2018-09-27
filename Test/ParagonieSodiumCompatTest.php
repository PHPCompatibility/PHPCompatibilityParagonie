<?php
/*
 * Test file to run PHP_CodeSniffer against to make sure the polyfills are correctly excluded.
 *
 * {@internal This file is incomplete and only does a spot check!}}
 */
try {
	$a = sodium_crypto_pwhash_str();

	echo SODIUM_CRYPTO_BOX_SEEDBYTES;

} catch ( SodiumException $e ) {
}
