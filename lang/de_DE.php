<?php
/**
 * German (Germany) language pack
 * @package modules: i18n_fieldtypes
 * @subpackage i18n
 */

i18n::include_locale_file('modules: i18n_fieldtypes', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['I18NDATETIME']['DATEFORMATNICE'] = '%e. %B %G';
$lang['de_DE']['I18NDATETIME']['DATETIMEFORMATNICE'] = '%e. %B %G %H:%M';
$lang['de_DE']['I18NDATETIME']['DATETIMEFORMATNICE24'] = 'd.m.Y H:i';
$lang['de_DE']['ZENDDATE']['DATEFORMATNICE'] = 'j. F Y';
$lang['de_DE']['ZENDDATE']['DATETIMEFORMATNICE'] = 'j. F Y, G:i';
$lang['de_DE']['ZENDDATE']['DATEFORMATPURE'] = 'd.m.Y H:i:s';
$lang['de_DE']['ZENDDATE']['DATETIMEFORMATNICE24'] = 'd.m.Y H:i';
$lang['de_DE']['CURRENCY']['THOUSANDDELIMITER'] = '.';
$lang['de_DE']['CURRENCY']['DECIMALDELIMITER'] = ',';