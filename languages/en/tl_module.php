<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009-2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['ticker_direction']	= array('Direction', 'Select horizontal or vertical scrolling.');
$GLOBALS['TL_LANG']['tl_module']['ticker_pause']		= array('Allow pause', 'Show controls to pause/continue news ticker.');
$GLOBALS['TL_LANG']['tl_module']['ticker_width']		= array('Width', 'Enter the ticker width in pixel.');
$GLOBALS['TL_LANG']['tl_module']['ticker_height']		= array('Height', 'Enter the ticker height in pixel.');
$GLOBALS['TL_LANG']['tl_module']['ticker_speed']		= array('Speed', 'Enter how many miliseconds a scroll should take. "500" is a good value.');
$GLOBALS['TL_LANG']['tl_module']['ticker_delay']		= array('Delay', 'Enter how often the ticker will scroll. "5000" is a good value.');
$GLOBALS['TL_LANG']['tl_module']['ticker_transition']	= array('Scroll transition', 'Select a scroll effect. <a href="http://www.mootools.net/docs/core/Fx/Fx.Transitions"'.LINK_NEW_WINDOW.'>More info</a>');
$GLOBALS['TL_LANG']['tl_module']['ticker_ease']			= array('Transition Ease', 'Only applied if transition is not "linear".');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['ticker_legend']		= 'Ticker Settings';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_module']['vertical'] 			= 'Vertical';
$GLOBALS['TL_LANG']['tl_module']['horizontal'] 			= 'Horizontal';
$GLOBALS['TL_LANG']['tl_module']['fade']	 			= 'Fade';
$GLOBALS['TL_LANG']['tl_module']['linear']				= 'Linear';
$GLOBALS['TL_LANG']['tl_module']['easeIn']				= 'On fade in';
$GLOBALS['TL_LANG']['tl_module']['easeOut']				= 'On fade out';
$GLOBALS['TL_LANG']['tl_module']['easeInOut']			= 'On fade in and out';

