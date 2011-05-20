<?php


class ComDonateDatabaseRowTransaction extends KDatabaseRowTable
{
	public function save()
	{ 
		$isNew = $this->isNew();
		$saved = parent::save();
		
		if ($isNew && $saved) {
			$this->_sendReceipt();
			$this->_sendAdmin();
		}

		return $saved;
	}
	
	protected function _sendReceipt() {
		$from = "noreply@bwhf.ca";
		$fromName = "BWFH";
		$to = $this->email;
		$subject = "Bluewater Heather Foundation Receipt";
		$body = "
		<h1>Thank You for your donation</h1>
		<p>
			Name: {$this->lastname}, {$this->firstname}<br/>
			Address: {$this->address1}, {$this->address2}
		</p>
		
		<p>
			Amount: {$this->amount}<br/>
			Card Type: {$this->cardtype}<br/>
			Card Number: {$this->cardnumber}<br/>
		</p>
		<p>Organization ID: 123456</p>";
		
		$mailer = JFactory::getMailer();
		$mailer->setSender(array($from, $fromName));
		$mailer->addRecipient($to);
		$mailer->setSubject($subject);
		$mailer->setBody($body);
		$mailer->isHTML(true);
		
		if (!$mailer->send()) {
			echo "recipt error";
			die;
		}
	}
	
	protected function _sendAdmin() {
		$from = "noreply@bwhf.ca";
		$fromName = "BWFH";
		$to = 'jbennett@ccistudios.com';
		$subject = "Bluewater Heather Foundation Donation";
		$body = "A new donation for Bluewater Health Foundation has occured";
		
		$mailer = JFactory::getMailer();
		$mailer->setSender(array($from, $fromName));
		$mailer->addRecipient($to);
		$mailer->setSubject($subject);
		$mailer->setBody($body);
		
		if (!$mailer->send()) {
			echo "admin error";
			die;
		}
	}
}