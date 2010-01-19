<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
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
 * @copyright  Andreas Schempp 2009
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsticker'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_featured,skipFirst,news_numberOfItems,perPage;{ticker_legend},ticker_direction,ticker_pause,ticker_width,ticker_height,ticker_speed,ticker_delay,ticker_transition,ticker_ease;{template_legend:hide},news_metaFields,news_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_direction'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_direction'],
	'exclude'		=> true,
	'inputType'		=> 'select',
	'options'		=> array('vertical', 'horizontal'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_module'],
	'eval'			=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_pause'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_pause'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50 m12'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_height'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_height'],
	'exclude'		=> true,
	'default'		=> '200',
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_width'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_width'],
	'exclude'		=> true,
	'default'		=> '500',
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_speed'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_speed'],
	'exclude'		=> true,
	'default'		=> '500',
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_delay'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['ticker_delay'],
	'exclude'		=> true,
	'default'		=> '5000',
	'inputType'		=> 'text',
	'eval'			=> array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_transition'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ticker_transition'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('linear', 'Quad', 'Cubic', 'Quart', 'Quint', 'Sine', 'Expo', 'Circ', 'Bounce', 'Back', 'Elastic'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_ease'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ticker_ease'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('easeIn', 'easeOut', 'easeInOut'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
);

