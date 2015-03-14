<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\nivoslider\migrations;

class nivo_slider_1_0_4 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['nivo_slider']) && version_compare($this->config['nivo_slider'], '1.0.4', '>=');
	}

	static public function depends_on()
	{
		return array('\cece74\nivoslider\migrations\nivo_slider_1_0_3');
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'nivo_slider'		=> array(
					'img_url'				=> array('VCHAR:255', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(
			'drop_columns' => array(
				$this->table_prefix . 'nivo_slider' => array('img_url'),
			),
		);
	}

	public function update_data()
	{
		return array(
			// Update configs
			array('config.update', array('nivo_slider', '1.0.4')),
		);
	}
}
