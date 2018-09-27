<?php
/*
 * Test file to run PHP_CodeSniffer against to make sure the polyfills are correctly excluded.
 */
if ( PHP_VERSION_ID < 50600 ) {}

$a = random_bytes();
$a = random_int();

try {
} catch ( TypeError $e ) {
} catch ( Error $e ) {
}
