<?php

class ComDonateViewTransactionHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$params  = JComponentHelper::getParams('com_donate');
		$this->assign('show_title', $params->get('show_page_title'));
		$this->assign('page_title', $params->get('page_title'));
		
		return parent::display();
	}
	
}