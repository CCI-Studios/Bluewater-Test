<?php

class ComDonateTemplateHelperListbox extends KTemplateHelperListbox
{
	
	public function creditcards($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'cardtype',
			'attribs'	=> array(),
			'deselect'	=> true
		))->append(array(
			'selected'	=> $config->{$config->name},
		));
		
		$options = array();

		if ($config->deselect) {
			$options[] = $this->option(array('text' => '- '.JText::_('Select').' -', 'value' => ''));
		}
		
		$options[] = $this->option(array('text' => 'American Express', 'value' => 'American Express'));
		$options[] = $this->option(array('text' => 'Master Card', 'value' => 'Master Card'));
		$options[] = $this->option(array('text' => 'Visa', 'value' => 'Visa'));
		$config->options = $options;
		
		return $this->optionlist($config);
	}
	
	public function status($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> 'status',
			'attribs'	=> array(),
			'deselect'	=> true,
		))->append(array(
			'selected'	=> $config->{$config->name},
		));
		
		$options = array();
		
		if ($config->deselect) {
			$options[] = $this->option(array('text' => '- '.JText::_('Select').' -', 'value' => ''));
		}
		
		$options[] = $this->option(array('text' => 'Confirmed', 'value' => 'Confirmed'));
		$options[] = $this->option(array('text' => 'Declined', 'value' => 'Declined'));
		$options[] = $this->option(array('text' => 'Error', 'value' => 'Error'));
		$options[] = $this->option(array('text' => 'Pending', 'value' => 'Pending'));
		
		$config->options = $options;
		return $this->optionlist($config);
	}
	
	public function needs($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'	=> 'needs',
			'name'	=> 'donate_need_id',
			'value'	=> 'id',
			'text'	=> 'title',
		));
		
		return parent::_listbox($config);
	}
}