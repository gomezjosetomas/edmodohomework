<div class="answers form large-10 medium-9 columns">
<?= $this->assign('title', $hwid->first()->title); ?>
    <?= $this->Form->create($answer) ?>
	
    <fieldset>
        <legend><?= __('Question: ') ?></legend>
        <?php
			echo $hwid->first()->question;
            echo $this->Form->input('answer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
