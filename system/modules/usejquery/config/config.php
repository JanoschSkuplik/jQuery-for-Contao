<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Janosch Skuplik :: Web- und Mediendesign0
 * @author     Janosch Skuplik <http://www.janosch-skuplik.de>
 * @package    UseJQuery
 * @license    LGPL
 * @filesource
 */
 
// InsertTag
$GLOBALS['TL_HOOKS']['generatePage'][] = array('UseJQuery', 'check_jQuery');

//Array of versions and paths
$GLOBALS['TL_JQUERY_VERSION'] = array(
	'last_version_from_jquery' => array(
		'jquery_local' => 'http://code.jquery.com/jquery.min.js',
		'jquery_jquery' => 'http://code.jquery.com/jquery.min.js',
		'jquery_googleapis' => 'http://code.jquery.com/jquery.min.js',
		'jquery_microsoft' => 'http://code.jquery.com/jquery.min.js'
	),
	'1.9.1' => array(
		'jquery_local' => 'plugins/jquery/js/jquery-1.9.1.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.9.1.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js'  
	),
	'1.9.0' => array(
		'jquery_local' => 'plugins/jquery/js/jquery-1.9.0.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.9.0.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js'  
	),
	'1.8.3' => array(
		'jquery_local' => 'plugins/jquery/js/jquery-1.8.3.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.8.3.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'  
	),
  '1.7.2' => array(
    'jquery_local' => 'plugins/jquery/js/jquery-1.7.2.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.7.2.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js'  
  ),
  '1.6.4' => array(
    'jquery_local' => 'plugins/jquery/js/jquery-1.6.4.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.6.4.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.4.min.js'
  ),
  '1.5.2' => array(
    'jquery_local' => 'plugins/jquery/js/jquery-1.5.2.min.js',
    'jquery_jquery' => 'http://code.jquery.com/jquery-1.5.2.min.js',
    'jquery_googleapis' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js',
    'jquery_microsoft' => 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js'
  )
);


?>