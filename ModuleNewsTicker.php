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


class ModuleNewsTicker extends ModuleNewsList
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_newsticker';
	
	
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### NEWS TICKER ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}
	
	
	/**
	 * Generate module
	 */
	protected function compile()
	{
		$GLOBALS['news_ticker_width'] = $this->ticker_width;
		
		parent::compile();
		
		$this->Template->strId = $this->id;
		$this->Template->controls = $this->ticker_pause ? true : false;
		$this->Template->speed = $this->ticker_speed;
		$this->Template->delay = $this->ticker_delay;
		$this->Template->direction = $this->ticker_direction;
		$this->Template->width = ($this->ticker_direction == 'vertical' ? $this->ticker_width : (count($this->Template->articles) * $this->ticker_width));
		$this->Template->height = $this->ticker_height;
		$this->Template->stop = $GLOBALS['TL_LANG']['MSC']['newsTickerStop'];
		$this->Template->play = $GLOBALS['TL_LANG']['MSC']['newsTickerPlay'];
		
		// Load newsticker javascript + CSS
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/newsticker/html/newsticker.js';
		$GLOBALS['TL_CSS'][] = 'system/modules/newsticker/html/newsticker.css';
	}
}

