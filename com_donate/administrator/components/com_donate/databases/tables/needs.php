<?php

class ComDonateDatabaseTableNeeds extends KDatabaseTableAbstract
{
	
	public function __construct(KConfig $config)
	{
		$config->name = 'donate_view_needs';
		$config->base = 'donate_needs';
		
		parent::__construct($config);
	}
	
}