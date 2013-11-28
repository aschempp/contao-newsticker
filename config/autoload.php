<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Newsticker
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModuleNewsTicker' => 'system/modules/newsticker/ModuleNewsTicker.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_newsticker' => 'system/modules/newsticker/templates',
	'news_ticker'    => 'system/modules/newsticker/templates',
));
