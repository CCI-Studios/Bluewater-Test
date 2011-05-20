<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />	

<form action="<?= @route() ?>" method="get">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num') ?></th>
				<th width="5">&nbsp;</th>
				
				<th><?= @helper('grid.sort', array('column'=>'lastname', 'title' => 'Name')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'date')) ?>
				<th width="50"><?= @helper('grid.sort', array('column'=>'amount')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'status')) ?></th>
				
				<th width="5"><?= @text('id') ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($transactions as $transaction): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$transaction))?></td>
				
				<td>
					<a href="<?= @route('view=transaction&id='.$transaction->id) ?>">
						<?= $transaction->lastname .', '. $transaction->firstname ?>
					</a>
				</td>
				<td align="center"><?= $transaction->date ?></td>
				<td align="center">$<?= $transaction->amount ?></td>
				<td align="center"><?= $transaction->status ?></td>
				
				<td align="center"><?= $transaction->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($transactions)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No Transactions Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>