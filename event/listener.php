<?php
/**
* @package System Info
* @copyright (c) 2015 cece74 - http://www.microcosmoacquari.it/forum/
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace cece74\nivoslider\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
		'core.user_setup' => 'load_language_on_setup',
		);
	}

		public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'cece74/nivoslider',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
