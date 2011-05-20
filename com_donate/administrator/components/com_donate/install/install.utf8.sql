CREATE TABLE IF NOT EXISTS `#__donate_transactions` (
	`donate_transaction_id` SERIAL,
	
	`firstname` VARCHAR(250) NOT NULL,
	`lastname` VARCHAR(250) NOT NULL,
	`phone` VARCHAR(30) NOT NULL,
	`email` VARCHAR(250) NOT NULL,
	`organization` VARCHAR(250),
	
	`address1` VARCHAR(250) NOT NULL,
	`address2` VARCHAR(250) NOT NULL,
	`city` VARCHAR(250) NOT NULL,
	`state` VARCHAR(250) NOT NULL,
	`country` VARCHAR(250) NOT NULL,
	`postal` VARCHAR(250) NOT NULL,
	
	
	`cardtype` VARCHAR(250) NOT NULL,
	`cardnumber` VARCHAR(250) NOT NULL,
	`expiremonth` VARCHAR(250) NOT NULL,
	`expireyear` VARCHAR(250) NOT NULL,
	`status` VARCHAR(30) NOT NULL,
	
	`donate_need_id` BIGINT(20) UNSIGNED NOT NULL,
	`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`amount` float NOT NULL,

	UNIQUE KEY `donate_transaction_id` (`donate_transaction_id`)	
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__donate_needs` (
	`donate_need_id` SERIAL,
	
	`title` VARCHAR(250) NOT NULL,
	`amount` INT(12) NOT NULL,
	`date` DATE NOT NULL
	
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE OR REPLACE VIEW `#__donate_view_needs` as 
select tbl.*, tbl.amount - sum(t.amount) AS remaining
from `#__donate_needs` as tbl
LEFT JOIN `#__donate_transactions` as t ON tbl.donate_need_id = t.donate_need_id AND t.status = 'Confirmed'
GROUP BY tbl.donate_need_id