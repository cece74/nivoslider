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
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_slider',
		);
	}

	/**
	* Constructor
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\db\driver\driver_interface $db, $table_prefix, $phpbb_root_path)
	{
		$this->template = $template;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->db = $db;
		$this->table_prefix = $table_prefix;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	=> 'cece74/nivoslider',
			'lang_set'	=> 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_slider($event)
	{
		define ('SLIDER_TABLE', $this->table_prefix.'nivo_slider');

		$sql = 'SELECT *
			FROM ' . SLIDER_TABLE . '
			ORDER BY order_img';
		$result = $this->db->sql_query($sql);
		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->template->assign_block_vars('imgs', array(
				'SLIDE_IMG'		=> '<img src="'. $this->phpbb_root_path .'ext/cece74/nivoslider/styles/all/theme/images/'. $row['file_name'] .'" alt="'. $row['img_alt'] .'" title="'. $row['img_title'] .'" />',
			));
		}
		$this->db->sql_freeresult($result);
	}
}
