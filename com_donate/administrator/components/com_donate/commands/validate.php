<?php

class ComDonateCommandValidate extends KCommand
{
	
	public function _controllerBeforeAdd(KCommandContext $context)
	{
		$identifier = (string)$context->caller->getIdentifier();
		$model = $context->caller->getModel();
		
		if (method_exists($model, 'validate')) {
			$data = $context->data;
			$validationErrors = $model->validate($data);
			
			if (!empty($validationErrors)) {
				$tempData = $data;
				unset($tempData['_token']);
				KRequest::set('session.'.$identifier, serialize((array)$tempData->getIterator()));
				
				$referrer = KRequest::referrer();
				$query = $referrer->getQuery(true);
				$query['id'] = $model->getState()->id; 
				$referrer->setQuery($query);
				
				$context->caller->setRedirect((string)$referrer, implode('<br/>', $validationErrors), 'error');
				return false;
			}
		}
		
		return true;
	}
	
	public function _controllerBeforeSave(KCommandContext $context)
	{
		return $this->_controllerBeforeAdd($context);	
	}
	
	public function _controllerBeforeApply(KCommandContext $context)
	{
		return $this->_controllerBeforeSave($context);
	}
	
	public function _controllerBeforeRead(KCommandContext $context)
	{
		$identifier = (string)$context->caller->getIdentifier();
		$tempData = KRequest::get('session.'.$identifier, 'raw');
		
		if (!empty($tempData)) {
			$tempData = unserialize($tempData);
			
			if ($tempData !== false) {
				$model = $context->caller->getModel();
				$model->getItem()->setData($tempData);
			}
			
			KRequest::set('session.'.$identifier, null);
		}
		
		return true;	
	}
	
}