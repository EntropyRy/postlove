<?php

/**
*
* newspage [Dutch]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'POSTLOVE_CONTROL'	=> 'Post "vind ik leuk"',
	'POSTLOVE_USE_CSS'	=> 'Gebruik bijgeleverde CSS',
	'POSTLOVE_USE_CSS_EXPLAIN'	=> 'Om POST LOVE makkelijker te kunnen aanpassen kan je het laden van de standaard CSS uitzetten. Als je je eigen afbeeldingen wil gebruiken, kijk dan in <code>overall_header_head_append.html</code>',
	'POSTLOVE_SHOW_LIKES'	=> 'Laat het aantal posts zien dat deze gebruiker leuk vindt',
	'POSTLOVE_SHOW_LIKES_EXPLAIN'	=> 'Laat het aantal posts dat een gebruiker leuk vind zien in <code>viewtopic</code>',
	'POSTLOVE_SHOW_LIKED'	=> 'Laat het aantal door anderen leuk gevonden posts van de gebruiker zien',
	'POSTLOVE_SHOW_LIKED_EXPLAIN'	=> 'Laat in <code>viewtopic</code> zien hoeveel posts van deze gebruiker leuk gevonden worden door anderen',

	//Version 1.1 langs
	'ACP_POSTLOVE_GRP'	=> 'Post Love',
	'ACP_POSTLOVE'	=> 'Post love',
	'POSTLOVE_EXPLAIN'	=> 'From here you can change some Post Love settings',
	'CONFIRM_MESSAGE'	=> 'Changes saved!<br><br><a href="%1$s">Back</а>',
	'POSTLOVE_CURRENT_THEME'	=> 'Current theme',
	'THEME_NAME'	=> 'Theme name',
	'THEME_AUTHOR'	=> 'Theme author',
	'THEME_DESCRIPTION'	=> 'Theme description',
	'THEME_SUPPORT_STYLES'	=> 'Supported styles',
	'THEME_PREVIEW'	=> 'Preview',
	'POSTLOVE_CHOOSE_THEME' => 'Select theme',

	'POSTLOVE_NO_THEMES_INSTALLED'	=> 'There are no themes installed!<br>Please add them in <i>$phpbb_root_path/ext/anavaro/postlove/themes</i> folder',
	'THEME_CHANGED'	=> 'Theme changed',
	'POSTLOVE_NO_WRITE_ACTION'	=> 'No write acccess!<br>Please allow write access to<i> $phpbb_root_path/ext/anavaro/postlove/styles </i>folder',

	'POSTLOVE_AUTHOR_LIKE'	=> 'Author can like posts',
	'POSTLOVE_AUTHOR_LIKE_EXPLAIN'	=> 'Can the author like his/her own posts or not',
));