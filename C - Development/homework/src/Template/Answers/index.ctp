<div class="answers form large-10 medium-9 columns">
<?= $this->assign('title', $hwid->first()->title); ?>
<div>
<?= $this->Html->link(__('Logout'), ['action' => 'Logout']) ?>
</div>
    <table cellpadding="0" cellspacing="0">
	<?= 'Question: ';?> 
	<?= $hwid->first()->question;?> 
    <thead> 
        <tr>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('answer') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($answers as $answer): ?>
        <tr>
            <td><?= $this->Html->link(__( $answer->username), ['controller' => 'Answers', 'action' => 'view', $hwid->first()->h_id, $answer->username]) ?></td>
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
