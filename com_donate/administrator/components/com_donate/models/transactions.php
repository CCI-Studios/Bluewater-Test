<?php

class ComDonateModelTransactions extends KModelTable
{
	
	public function validate($data) {
		$errors = array();
		
		if (trim($data->firstname) === '') {
			$errors[] = 'Please Enter a first name';
		}
		
		if (trim($data->cardnumber) === '') {
			$errors[] = "Please enter your card number";
		}
		
		if (count($errors) === 0) {
			$t = $this->_doTransaction($data);
			$data->status = $t->status;
			
			if ($t->success) {
			} else {
				$errors[] = 'Credit card was declined: '.$t->error;
			}
		}
		
		return $errors;
	}
	
	protected function _doTransaction($data) {
		$results = new stdClass();
		
		$results->success = ($data->cvv !== '123');
		
		if ($results->success) {
			$results->status = 'Confirmed';
		} else {
			$results->status = 'Pending';
			$results->error = 'NSF';
		}
		
		$results->trans_id = rand() % 10000000;
		
		return $results;
	}
}