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
		
		return $errors;
	}
}