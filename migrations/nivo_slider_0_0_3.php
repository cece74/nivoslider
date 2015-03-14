<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\nivoslider\migrations;

class nivo_slider_0_0_3 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
				$this->table_prefix . 'nivo_slider'	=> array(
					'COLUMNS'			=> array(
						'id'			=> array('UINT', null, 'auto_increment'),
						'order_img'		=> array('UINT', 0),
						'file_name'		=> array('VCHAR:255', ''),
						'img_alt'		=> array('VCHAR:255', ''),
						'img_title'		=> array('VCHAR:255', ''),
					),
					'PRIMARY_KEY'	=> 'id',
						'KEYS'	=> array(
							'file_name' 	=> array('UNIQUE', 'file_name'),
						),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'nivo_slider',
			),
		);
	}

	public function update_data()
	{
		return array(
			// Current version
			array('config.add', array('nivo_slider', '0.0.1')),
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_NIVO_SLIDER')),
			array('module.add', array('acp', 'ACP_NIVO_SLIDER', array(
				'module_basename'	=> '\cece74\nivoslider\acp\manage_module',
				'module_langname'	=> 'ACP_NIVO_SLIDER_MANAGE',
				'module_mode'		=> 'manage',
				'module_auth'		=> 'ext_cece74/nivoslider && acl_a_board',
			))),
		);
	}
}
