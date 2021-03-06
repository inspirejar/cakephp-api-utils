<?php
App::uses('AppModel', 'Model');

/**
 * OAuth2 App Model
 *
 * PHP 5
 *
 * Copyright (c) WizeHive, Inc. (http://www.wizehive.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Anthony Putignano <anthony@wizehive.com>
 * @since       0.1
 * @package     OAuth2
 * @subpackage  OAuth2.Model
 * @copyright   Copyright (c) WizeHive, Inc. (http://www.wizehive.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */
class OAuth2AppModel extends AppModel {
	
	/**
	 * Behaviors
	 * 
	 * @since   0.1
	 * @var     array
	 */
	public $actsAs = array(
		'Containable'
	);
	
}
