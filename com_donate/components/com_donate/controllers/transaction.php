<?php

class ComDonateControllerTransaction extends ComDefaultControllerDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$command = KFactory::get('site::com.donate.command.validate');
		$this->getCommandChain()->enqueue($command);
	}
	
	
	protected function _actionAdd(KCommandContext $context)
	{
		$data = parent::_actionAdd($context);
		
		$params  = JComponentHelper::getParams('com_donate'); /* FIXME use params */
		$this->setRedirect('index.php?option=com_content&view=article&id=1');
		
		return $data;
	}
}