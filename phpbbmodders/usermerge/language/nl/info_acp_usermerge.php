<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 RMcGirr83 (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25) <http://www.phpbbmodders.net>
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_USER_MERGE'		=> 'Gebruiker samenvoegen',
	'LOG_USERS_MERGED'	=> '<strong>Samengevoegde gebruikers</strong><br />%s',
));
