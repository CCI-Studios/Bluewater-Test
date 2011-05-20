<?php

class ComDonateViewHtml extends ComDefaultViewHtml
{
	
	public function __construct(KConfig $config)
	{
		$config->views = array(
			'transactions'	=> JText::_('Transactions'),
			'needs'			=> JText::_('Needs')
		);
		
		parent::__construct($config);
	}
	
	
}