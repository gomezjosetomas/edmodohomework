<div class="homeworks index large-10 medium-9 columns">
<?= $this->assign('title', 'Homeworks'); ?>
<?= $this->Html->link(__('Logout'), ['action' => 'Logout']) ?>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('due_date') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($assignedTo as $assignedTo): ?>
        <tr>
            <td><?php if($assignedTo->homework->due_date > $time){ ?>
				<?= $assignedTo->has('homework') ? $this->Html->link($assignedTo->homework->title, ['controller' => 'Answers', 'action' => 'add', $assignedTo->homework->h_id]) : '' ?>
				<?php }else{
				echo $assignedTo->homework->title;
				}
                ?>
            </td>
            <td><?= h($assignedTo->homework->due_date) ?></td>
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
