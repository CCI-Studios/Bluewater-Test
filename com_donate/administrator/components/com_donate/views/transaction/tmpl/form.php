<?= JHtml::_('behavior.calendar'); ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$transaction->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:50%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Personal Details')?></legend>

		<label for="field_firstname" class="mainlabel"><?=@text('First Name')?>:</label>
		<input type="text" name="firstname" id="field_firstname" value="<?=$transaction->firstname?>" /><br/>
		
		<label for="field_lastname" class="mainlabel"><?=@text('Last Name')?>:</label>
		<input type="text" name="lastname" id="field_lastname" value="<?=$transaction->lastname?>" /><br/>
		
		<label for="field_phone" class="mainlabel"><?=@text('Phone Number')?>:</label>
		<input type="text" name="phone" id="field_phone" value="<?=$transaction->phone?>" /><br/>
		
		<label for="field_email" class="mainlabel"><?=@text('Email')?>:</label>
		<input type="text" name="email" id="field_email" value="<?=$transaction->email?>" /><br/>
		
		<label for="field_organization" class="mainlabel"><?=@text('Organization')?>:</label>
		<input type="text" name="organization" id="field_organization" value="<?=$transaction->organization?>" /><br/>
		
		<label for="field_need" class="mainlabel"><?=@text('Need')?>:</label>
		<?= @helper('admin::com.donate.template.helper.listbox.needs')?><br/>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('Address Details')?></legend>
		
		<label for="field_address1" class="mainlabel"><?=@text('Address')?>:</label>
		<input type="text" name="address1" id="field_address1" value="<?=$transaction->address1?>" /><br/>
		
		<label for="field_address2" class="mainlabel"><?=@text('Address')?>:</label>
		<input type="text" name="address2" id="field_address2" value="<?=$transaction->address2?>" /><br/>
		
		<label for="field_city" class="mainlabel"><?=@text('City')?>:</label>
		<input type="text" name="city" id="field_city" value="<?=$transaction->city?>" /><br/>
		
		<label for="field_state" class="mainlabel"><?=@text('State')?>:</label>
		<input type="text" name="state" id="field_state" value="<?=$transaction->state?>" /><br/>
		
		<label for="field_country" class="mainlabel"><?=@text('Country')?>:</label>
		<input type="text" name="country" id="field_country" value="<?=$transaction->country?>" /><br/>
		
		<label for="field_postal" class="mainlabel"><?=@text('Postal')?>:</label>
		<input type="text" name="postal" id="field_postal" value="<?=$transaction->postal?>" /><br/>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('Transaction Details')?></legend>
		
		<label for="field_amount" class="mainlabel"><?=@text('Amount')?>:</label>
		<input type="text" name="amount" id="field_amount" value="<?=$transaction->amount?>" /><br/>
		
		<label for="field_cardtype" class="mainlabel"><?=@text('Cardtype')?>:</label>
		<?= @helper('admin::com.donate.template.helper.listbox.creditcards')?><br/>
		
		<label for="field_cardnumber" class="mainlabel"><?=@text('Card Number')?>:</label>
		<input type="text" name="cardnumber" id="field_cardnumber" value="<?=$transaction->cardnumber?>" /><br/>
		
		<label for="field_expiremonth" class="mainlabel"><?=@text('Expire Month')?>:</label>
		<input type="text" name="expiremonth" id="field_expiremonth" value="<?=$transaction->expiremonth?>" /><br/>
		
		<label for="field_expireyear" class="mainlabel"><?=@text('Expire Year')?>:</label>
		<input type="text" name="expireyear" id="field_expireyear" value="<?=$transaction->expireyear?>" /><br/>
		
		<label for="field_status" class="mainlabel"><?=@text('Status')?>:</label>
		<?= @helper('admin::com.donate.template.helper.listbox.status')?><br/>
			

		
		<label for="field_date" class="mainlabel"><?= @text('Date') ?>:</label>
		<?= $transaction->date; ?><br/>
	</fieldset>
</div>
</form>
