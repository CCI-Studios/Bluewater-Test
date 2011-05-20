<?php

class ComDonateFilterCreditcard extends KFilterAbstract
{
	protected function _validate($value)
	{
		return true;
	}
		
	protected function _sanitize($value)
	{
		return preg_replace('/(?!^.?)[0-9](?!(.){0,3}$)/', 'X', $value);
	}
	
}