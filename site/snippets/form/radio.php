<fieldset>
    <legend class="field__label"><?= $label ?></legend>
    <?php foreach($options as $option): ?>
        <label class="field__label field__label--radio <?php e($form->error($name), ' has-error ', ''); ?>">
            <input
                class="field__input field__input--radio"
                type="radio"
                name="<?= $name?>"
                value="<?= $option['val'] ?>"
                <?php e($option['val'] == $form->old($name) , ' checked')?>
            /> <?= $option['label'] ?>
        </label>
    <?php endforeach; ?>
</fieldset>
<?php if ($form->error($name)): ?>
    <p class="field__message field__message--error"><?= implode('<br>', $form->error($name)) ?></p>
<?php endif; ?>
