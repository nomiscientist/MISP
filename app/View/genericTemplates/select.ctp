<div id="genericModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="genericModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 id="genericModalLabel"><?= h($title) ?></h3>
    </div>
    <div class="modal-body modal-body-long">
        <p><?= h($description) ?></p>
        <?php
            $randomNumber = rand();
            echo $this->Form->create($model, ['id' => $randomNumber . 'Form', 'onsubmit' => $onsubmit ?? null]);
            echo $this->Form->input('relationship_type', [
                'type' => 'select',
                'options' => $options,
                'default' => $default ?? null,
            ]);
            echo $this->Form->end();
        ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="$('#<?= $randomNumber . 'Form' ?>').submit();"><?= __('Submit') ?></button>
        <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal"><?= __('Cancel') ?></button>
    </div>
</div>
