<?php
/**
*
* Nivo Slider [Arabic]
*
* @package Nivo Slider
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_NIVO_SLIDER'					=> 'معرض الصور Nivo',
	'ACP_NIVO_SLIDER_MANAGE'			=> 'الإعدادات',
	'ACP_NIVO_SLIDER_MANAGE_EXPLAIN'	=> 'من هنا تستطيع تحميل الصور الخاصة بمعرض الصور Nivo.',
	'UPLOAD'							=> 'رفع الملف',
	'FILE_NAME'							=> 'إسم الملف',
	'SELECT_FILE'						=> 'رفع الملف من جهاز الكمبيوتر لديك',
	'UPLOAD_SUCCESS'					=> 'تم رفع الملف %s بنجاح.',
	'UPLOAD_FILURE'						=> 'غير قادر على رفع الملف %s.',
	'FILE_ALREADY_EXISTS'				=> 'المعذرة, الملف موجود مُسبقاً.',
	'FILE_TOO_LARGE'					=> 'حجم الملف أكبر من الحد المطلوب.',
	'ILLEGAL_FILE_TYPE'					=> 'نوع الملف غير مقبول. المسموح به : JPG, JPEG, PNG أو GIF.',
	'IMAGE_ONLY'						=> 'نوع مرفوض : الملف يجب أن يكون "صورة".',
	'DELETE_SUCCESS'					=> 'تم حذف الملف %s بنجاح.',
	'DELETE_ERROR'						=> 'فشل في حذف الملف.',
	'URL'								=> 'الرابط',
	'ILLEGAL_URL'						=> 'رابط غير صحيح',
	'NO_IMAGE'							=> 'لم يتم تحديد الملف.',
));
