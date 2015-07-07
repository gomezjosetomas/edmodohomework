<!-- File: src/Template/Users/login.ctp -->
<?= $this->assign('title', 'Login'); ?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username') ?></legend>
        <?= $this->Form->input('username') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>