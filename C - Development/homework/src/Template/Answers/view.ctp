<div class="answers form large-10 medium-9 columns">
<?= $this->assign('title', $hwid->first()->title); ?>
<div>
<?= $this->Html->link(__('Logout'), ['action' => 'Logout']) ?>
</div>
    <table cellpadding="0" cellspacing="0">
	<div>
	<?= 'Question: ';?> 
	<?= $hwid->first()->question;?> 
	</div>
	<?= 'Username: ';?> 
	<?= $u;?> 
    <thead> 
        <tr>
            <th><?= $this->Paginator->sort('Answer ID') ?></th>
            <th><?= $this->Paginator->sort('answer') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($answers as $answer): ?>
        <tr>
            <td><?= h($answer->a_id) ?></td>
            <td><?= h($answer->answer) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
