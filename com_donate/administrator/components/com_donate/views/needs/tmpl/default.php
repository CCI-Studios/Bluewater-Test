<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/admin.css" />	

<form action="<?= @route() ?>" method="get">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num') ?></th>
				<th width="5">&nbsp;</th>
				
				<th><?= @helper('grid.sort', array('column'=>'lastname', 'title' => 'Name')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'date')) ?>
				<th width="50"><?= @helper('grid.sort', array('column'=>'amount')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column'=>'remaining'))?></th>
				
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
			foreach ($needs as $need): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$need))?></td>
				
				<td>
					<a href="<?= @route('view=need&id='.$need->id) ?>">
						<?= $need->title ?>
					</a>
				</td>
				<td align="center"><?= $need->date ?></td>
				<td align="center">$<?= $need->amount ?></td>
				<td align="center">$<?= ($need->remaining)? $need->remaining:$need->amount ?></td>
				
				<td align="center"><?= $need->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($needs)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No Needs Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>