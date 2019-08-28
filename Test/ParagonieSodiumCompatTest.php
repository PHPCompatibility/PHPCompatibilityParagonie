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

function SodiumExceptionTypeHint( SodiumException $a ) {}

echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES;
echo SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES;
echo SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES;
echo SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES;
echo SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES;
echo SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES;
echo SODIUM_CRYPTO_AUTH_BYTES;
echo SODIUM_CRYPTO_AUTH_KEYBYTES;
echo SODIUM_CRYPTO_BOX_SEALBYTES;
echo SODIUM_CRYPTO_BOX_SECRETKEYBYTES;
echo SODIUM_CRYPTO_BOX_PUBLICKEYBYTES;
echo SODIUM_CRYPTO_BOX_KEYPAIRBYTES;
echo SODIUM_CRYPTO_BOX_MACBYTES;
echo SODIUM_CRYPTO_BOX_NONCEBYTES;
echo SODIUM_CRYPTO_BOX_SEEDBYTES;
echo SODIUM_CRYPTO_KX_BYTES;
echo SODIUM_CRYPTO_KX_PUBLICKEYBYTES;
echo SODIUM_CRYPTO_KX_SECRETKEYBYTES;
echo SODIUM_CRYPTO_KX_SEEDBYTES;
echo SODIUM_CRYPTO_GENERICHASH_BYTES;
echo SODIUM_CRYPTO_GENERICHASH_BYTES_MIN;
echo SODIUM_CRYPTO_GENERICHASH_BYTES_MAX;
echo SODIUM_CRYPTO_GENERICHASH_KEYBYTES;
echo SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN;
echo SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX;
echo SODIUM_CRYPTO_PWHASH_SALTBYTES;
echo SODIUM_CRYPTO_PWHASH_STRPREFIX;
echo SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13;
echo SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13;
echo SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE;
echo SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE;
echo SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE;
echo SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE;
echo SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE;
echo SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE;
echo SODIUM_CRYPTO_SCALARMULT_BYTES;
echo SODIUM_CRYPTO_SCALARMULT_SCALARBYTES;
echo SODIUM_CRYPTO_SHORTHASH_BYTES;
echo SODIUM_CRYPTO_SHORTHASH_KEYBYTES;
echo SODIUM_CRYPTO_SECRETBOX_KEYBYTES;
echo SODIUM_CRYPTO_SECRETBOX_MACBYTES;
echo SODIUM_CRYPTO_SECRETBOX_NONCEBYTES;
echo SODIUM_CRYPTO_SIGN_BYTES;
echo SODIUM_CRYPTO_SIGN_SEEDBYTES;
echo SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES;
echo SODIUM_CRYPTO_SIGN_SECRETKEYBYTES;
echo SODIUM_CRYPTO_SIGN_KEYPAIRBYTES;
echo SODIUM_CRYPTO_STREAM_KEYBYTES;
echo SODIUM_CRYPTO_STREAM_NONCEBYTES;

sodium_bin2hex();
sodium_compare();
sodium_crypto_aead_aes256gcm_decrypt();
sodium_crypto_aead_aes256gcm_encrypt();
sodium_crypto_aead_aes256gcm_is_available();
sodium_crypto_aead_chacha20poly1305_decrypt();
sodium_crypto_aead_chacha20poly1305_encrypt();
sodium_crypto_aead_chacha20poly1305_keygen();
sodium_crypto_aead_chacha20poly1305_ietf_decrypt();
sodium_crypto_aead_chacha20poly1305_ietf_encrypt();
sodium_crypto_aead_chacha20poly1305_ietf_keygen();
sodium_crypto_aead_xchacha20poly1305_ietf_decrypt();
sodium_crypto_aead_xchacha20poly1305_ietf_encrypt();
sodium_crypto_aead_xchacha20poly1305_ietf_keygen();
sodium_crypto_auth();
sodium_crypto_auth_keygen();
sodium_crypto_auth_verify();
sodium_crypto_box();
sodium_crypto_box_keypair();
sodium_crypto_box_keypair_from_secretkey_and_publickey();
sodium_crypto_box_open();
sodium_crypto_box_publickey();
sodium_crypto_box_publickey_from_secretkey();
sodium_crypto_box_seal();
sodium_crypto_box_seal_open();
sodium_crypto_box_secretkey();
sodium_crypto_box_seed_keypair();
sodium_crypto_generichash();
sodium_crypto_generichash_final();
sodium_crypto_generichash_init();
sodium_crypto_generichash_keygen();
sodium_crypto_generichash_update();
sodium_crypto_kx();
sodium_crypto_pwhash_str();
sodium_crypto_pwhash_str_verify();
sodium_crypto_pwhash_scryptsalsa208sha256();
sodium_crypto_pwhash_scryptsalsa208sha256_str();
sodium_crypto_pwhash_scryptsalsa208sha256_str_verify();
sodium_crypto_scalarmult();
sodium_crypto_scalarmult_base();
sodium_crypto_secretbox();
sodium_crypto_secretbox_keygen();
sodium_crypto_secretbox_open();
sodium_crypto_shorthash();
sodium_crypto_shorthash_keygen();
sodium_crypto_sign();
sodium_crypto_sign_detached();
sodium_crypto_sign_keypair();
sodium_crypto_sign_open();
sodium_crypto_sign_publickey();
sodium_crypto_sign_publickey_from_secretkey();
sodium_crypto_sign_secretkey();
sodium_crypto_sign_seed_keypair();
sodium_crypto_sign_verify_detached();
sodium_crypto_sign_ed25519_pk_to_curve25519();
sodium_crypto_sign_ed25519_sk_to_curve25519();
sodium_crypto_stream();
sodium_crypto_stream_keygen();
sodium_crypto_stream_xor();
sodium_hex2bin();
sodium_increment();
sodium_library_version_major();
sodium_library_version_minor();
sodium_version_string();
sodium_memcmp();
sodium_randombytes_buf();
sodium_randombytes_uniform();
sodium_randombytes_random16();
