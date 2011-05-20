<?php

class ComDonateDatabaseTableTransactions extends KDatabaseTableAbstract
{
	
	public function __construct(KConfig $config)
	{
		$config->append(array(
			'behaviors'	=> array('creatable'),
			'filters'	=> array(
				'email'			=> array('email'),
				'cardnumber'	=> array('admin::com.donate.filter.creditcard'),
			)
		));
		
		parent::__construct($config);
	}
	
}