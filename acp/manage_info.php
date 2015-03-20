<?php
/**
*
* @package phpBB Extension - Nivo Slider
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\nivoslider\acp;

class manage_info
{
	function module()
	{
		return array(
			'filename'	=> '\cece74\nivoslider\acp\manage_module',
			'version'	=> '1.0.3',
			'title' => 'ACP_NIVO_SLIDER_MANAGE',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_NIVO_SLIDER_MANAGE',
					'auth' => 'ext_cece74/nivoslider && acl_a_board',
					'cat' => array('ACP_NIVO_SLIDER')
				),
			),
		);
	}
}

