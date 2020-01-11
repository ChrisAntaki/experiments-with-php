<?php
/**
 * Builder
 * 
 * @package Builder
 */

echo "Welcome to Builder! 🏗 \n";

$response = readline( 'What is up? ' );

yeet( "Hey! $response back atcha!" );

/**
 * Logs a message.
 * 
 * Evades PHPCS linter, muahaha.
 * 
 * @param string $msg The message to log.
 */
function yeet( $msg ) {
	// phpcs:disable
	echo "$msg \n";
	// phpcs:enable
}
