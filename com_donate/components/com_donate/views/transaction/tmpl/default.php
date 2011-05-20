<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_donate/css/site.css" />

<? if ($show_title): ?>
	<h1 class="componentheading"	><?= $page_title ?></h1>
<? endif; ?>


<form action="<?= @route('view=transaction&id='.$transaction->id) ?>" method="post" class="adminform" name="adminForm">
<div  id="mainform">
	<fieldset>
		<legend><?= @text('Personal Details')?></legend>

		<dl>
			<dt><label for="field_firstname" class="mainlabel"><?=@text('First Name')?>:</label></dt>
			<dd><input type="text" name="firstname" id="field_firstname" value="<?=$transaction->firstname?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_lastname" class="mainlabel"><?=@text('Last Name')?>:</label></dt>
			<dd><input type="text" name="lastname" id="field_lastname" value="<?=$transaction->lastname?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_phone" class="mainlabel"><?=@text('Phone Number')?>:</label></dt>
			<dd><input type="text" name="phone" id="field_phone" value="<?=$transaction->phone?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_email" class="mainlabel"><?=@text('Email')?>:</label></dt>
			<dd><input type="text" name="email" id="field_email" value="<?=$transaction->email?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_organization" class="mainlabel"><?=@text('Organization')?>:</label></dt>
			<dd><input type="text" name="organization" id="field_organization" value="<?=$transaction->organization?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_need" class="mainlabel"><?=@text('Need')?>:</label></dt>
			<dd><?= @helper('admin::com.donate.template.helper.listbox.needs')?></dd>
		</dl>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('Address Details')?></legend>
		
		<dl>
			<dt><label for="field_address1" class="mainlabel"><?=@text('Address')?>:</label></dt>
			<dd><input type="text" name="address1" id="field_address1" value="<?=$transaction->address1?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_address2" class="mainlabel"><?=@text('Address')?>:</label></dt>
			<dd><input type="text" name="address2" id="field_address2" value="<?=$transaction->address2?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_city" class="mainlabel"><?=@text('City')?>:</label></dt>
			<dd><input type="text" name="city" id="field_city" value="<?=$transaction->city?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_state" class="mainlabel"><?=@text('State')?>:</label></dt>
			<dd><input type="text" name="state" id="field_state" value="<?=$transaction->state?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_country" class="mainlabel"><?=@text('Country')?>:</label></dt>
			<dd><input type="text" name="country" id="field_country" value="<?=$transaction->country?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_postal" class="mainlabel"><?=@text('Postal')?>:</label></dt>
			<dd><input type="text" name="postal" id="field_postal" value="<?=$transaction->postal?>" /></dd>
		</dl>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('Transaction Details')?></legend>
		
		<dl>
			<dt><label for="field_amount" class="mainlabel"><?=@text('Amount')?>:</label></dt>
			<dd><input type="text" name="amount" id="field_amount" value="<?=$transaction->amount?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_cardtype" class="mainlabel"><?=@text('Cardtype')?>:</label></dt>
			<dd><?= @helper('admin::com.donate.template.helper.listbox.creditcards')?></dd>
		</dl>
		
		<dl>
			<dt><label for="field_cardnumber" class="mainlabel"><?=@text('Card Number')?>:</label></dt>
			<dd><input type="text" name="cardnumber" id="field_cardnumber" value="<?=$transaction->cardnumber?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_expiremonth" class="mainlabel"><?=@text('Expire Month')?>:</label></dt>
			<dd><input type="text" name="expiremonth" id="field_expiremonth" value="<?=$transaction->expiremonth?>" /></dd>
		</dl>
		
		<dl>
			<dt><label for="field_expireyear" class="mainlabel"><?=@text('Expire Year')?>:</label></dt>
			<dd><input type="text" name="expireyear" id="field_expireyear" value="<?=$transaction->expireyear?>" /></dd>
		</dl>
		<dl>
			<dt><label for="field_cvv" class="mainlabel"><?=@text('CVV')?>:</label></dt>
			<dd><input type="text" name="cvv" id="field_cvv" value="<?=$transaction->cvv?>" /></dd>
		</dl>
	</fieldset>
	
	<fieldset>
		<legend><?= @text('Actions')?></legend>
		
		<dl>
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Submit" /></dd>
		</dl>
	</fieldset>
</div>
</form>
