<?= JHtml::_('behavior.calendar'); ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$need->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:50%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Needs Details')?></legend>

		<label for="field_firstname" class="mainlabel"><?=@text('Title')?>:</label>
		<input type="text" name="title" id="field_title" value="<?=$need->title?>" /><br/>
		
		<label for="field_amount" class="mainlabel"><?=@text('Amount')?>:</label>
		<input type="text" name="amount" id="field_amount" value="<?=$need->amount?>" /><br/>
		
		<label for="field_date" class="mainlabel"><?=@text('Date')?>:</label>
		<input type="text" name="date" id="field_date" value="<?=$need->date;?>" />
		<input type="reset" class="button" value="..." onclick="return showCalendar('field_date','%Y-%m-%d');" /><br/>
	</fieldset>
</div>
</form>
