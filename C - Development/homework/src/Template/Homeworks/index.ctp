<div class="homeworks index large-10 medium-9 columns">
<?= $this->Html->link(__('Logout'), ['action' => 'Logout']) ?>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('due_date') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($homeworks as $homework): ?>
        <tr>
            <td><?= $this->Html->link(__($homework->title), ['controller' => 'Answers', 'action' => 'index', $homework->h_id]) ?></td>
            <td><?= h($homework->due_date) ?></td>
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
