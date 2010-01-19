-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `ticker_direction` varchar(10) NOT NULL default '',
  `ticker_pause` char(1) NOT NULL default '',
  `ticker_width` varchar(5) NOT NULL default '',
  `ticker_height` varchar(5) NOT NULL default '',
  `ticker_speed` varchar(5) NOT NULL default '',
  `ticker_delay` varchar(5) NOT NULL default '',
  `ticker_transition` varchar(255) NOT NULL default '',
  `ticker_ease` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
