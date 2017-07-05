<?php
/**
*
* User Merge extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 RMcGirr83 (Rich McGirr) rmcgirr83@rmcgirr83.org & Jari Kanerva (tumba25) <http://www.phpbbmodders.net>
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
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
	'VERSION' 			=> 'Versie',
	'LOG_USERS_MERGED'	=> '<strong>Samengevoegde gebruikers</strong><br />%s',
	'NO_USER_FOR_MERGE'			=> 'Een gespecificeerde gebruiker voor samenvoegen kan niet gelokaliseerd worden in de database.',
	'NO_USER_SPECIFIED'			=> 'Een gebruiker voor het samenvoegen werd niet gespecificeerd.',
	'CANNOT_MERGE_SELF'			=> 'Je probeert jezelf te verwijderen.',
	'CANNOT_MERGE_FOUNDER'		=> 'Oprichters kunnen alleen door andere oprichters worden verwijderd.',
	'CANNOT_MERGE_SAME'			=> 'Je kan dit gebruikersaccount <strong>%s</strong> niet samenvoegen met zichzelf.',

	'USERS_MERGED'				=> 'De opgegeven gebruikers werden succesvol samengevoegd.',
	'MERGE_USERS'				=> 'Gebruikers samenvoegen',
	'MERGE_USERS_CONFIRM'		=> 'Weet u zeker dat u deze gebruikers wilt samenvoegen?<br /><strong>%s zal verwijderd worden, dit kan niet ongedaan gemaakt worden.</strong>',
	'ACP_USER_MERGE_TITLE'		=> 'Gebruikers samenvoegen',
	'ACP_USER_MERGE_EXPLAIN'	=> 'Hier kunt u twee gebruikers samenvoegen in &eacute;&eacute;n gebruiker. Houd er rekening mee dat de oude gebruiker zal worden verwijderd en alleen de inhoud die door die gebruiker wordt gemaakt, wordt overgebracht naar de nieuwe gebruiker.',

	'OLD_USER'					=> 'Oude gebruikersnaam',
	'OLD_USER_EXPLAIN'			=> 'De oude gebruiker die samengevoegd moet worden.  Pas op, deze gebruiker wordt verwijderd bij samenvoeging.',
	'NEW_USER'					=> 'Nieuwe gebruikersnaam',
	'NEW_USER_EXPLAIN'			=> 'De nieuwe gebruiker waarmee de andere gebruiker moet worden samengevoegd. Deze gebruiker moet reeds bestaan.',
));
